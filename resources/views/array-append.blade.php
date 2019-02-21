
<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <table style="width: 100%; height: 100%;">
            <tbody id="{{$name}}">
            <tr id='add-btn'>
                <td id='add-line' colspan='3'>
                    <div style='width:100%;' class='btn-group'>
                        <div style='width:100%;height:36px;color:black;line-height: 20px;font-size: 30px;' class='btn btn-danger' id="append-line">
                            +
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <input type="hidden" name="{{$name}}" value="" />
        @include('admin::form.help-block')
    </div>
</div>
