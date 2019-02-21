<?php
/**
 * Created by PhpStorm.
 * User: all
 * Date: 2019/2/21
 * Time: 23:03
 */

namespace Encore\ArrayAppend;


use Encore\Admin\Form\Field;

class ArrayAppendExtension extends Field
{
    protected $view = 'array-append::array-append';
    protected static $js = [
        'vendor/weiwait/array-append/array-append/array-append.js',
    ];

    public function render()
    {
        $array = old($this->column, $this->value());

        if (empty($array)) {
            $array = '[]';
        }

        $this->script = <<<EOT
let container = document.getElementById("{$this->id}");
let array = {$array};

let weiwait = new Weiwait();

array.forEach(row => {
    weiwait.appendLine(row[0], row[1]);
})

$('#append-line').click(function () {
    weiwait.appendLine();

    return false
});

window.deleteTr = function (obj) {
    $(obj).parents('tr').remove();
}

$('button[type="submit"]').click(function() {
    let data = [];
    $('#{$this->id} input').each(function (i, v) {
        data.push($(v).val())
    });
    
    data2 = [];
    
    while (data.length > 0) {
        let tmp = data.splice(0, 2);
        if (! $.trim(tmp[0])) {
            continue;
        }
        data2.push(tmp);
    }
    
    $('input[name={$this->id}]').val(JSON.stringify(data2));
})
EOT;

        return parent::render();
    }
}