<?php

namespace Encore\Filesystem;

use Encore\Container\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->container->bind('filesystem', new Filesystem);
    }

    public function provides()
    {
        return ['filesystem'];
    }
}