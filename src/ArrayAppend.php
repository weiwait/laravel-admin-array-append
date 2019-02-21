<?php

namespace Encore\ArrayAppend;

use Encore\Admin\Extension;

class ArrayAppend extends Extension
{
    public $name = 'array-append';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Arrayappend',
        'path'  => 'array-append',
        'icon'  => 'fa-gears',
    ];
}