<?php

namespace Encore\Filesystem;

class ServiceProvider extends \Encore\Container\ServiceProvider
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