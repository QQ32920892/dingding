<?php
namespace Supen\DingDing\Facades;

use Illuminate\Support\Facades\Facade;

class DingDing extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DingDing';
    }
}