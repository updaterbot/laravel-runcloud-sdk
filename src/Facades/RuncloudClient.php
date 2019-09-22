<?php

namespace Mindfullsilence\LaravelRuncloudSdk\Facades;

use Illuminate\Support\Facades\Facade;


class RuncloudClient extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'runcloud.api';
    }
}