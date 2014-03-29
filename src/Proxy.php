<?php

namespace Encore\Filesystem;

class Proxy extends \Encore\Container\Proxy
{
    public static function getConcreteBinding()
    {
        return 'filesystem';
    }
}