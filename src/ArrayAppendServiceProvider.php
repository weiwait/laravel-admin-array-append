<?php

namespace Encore\ArrayAppend;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class ArrayAppendServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ArrayAppend $extension)
    {
        if (! ArrayAppend::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'array-append');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/weiwait/array-append')],
                'array-append'
            );
        }

        Admin::booting(function () {
            Form::extend('array', ArrayAppendExtension::class);
        });
    }
}