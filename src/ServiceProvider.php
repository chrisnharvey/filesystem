<?php

namespace Encore\Filesystem;

use Encore\Container\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the filesystem object to the container.
     *
     * @return void
     */
    public function register()
    {
        $this->container->bind('filesystem', new Filesystem);
    }

    public function provides()
    {
        return ['filesystem'];
    }
}