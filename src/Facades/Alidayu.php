<?php
/**
 * @description laravel 门面
 * @author vicens <vicens.shi@qq.com>
 */

namespace Vicens\Alidayu\Facades;

use Illuminate\Support\Facades\Facade;

class Alidayu extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'alidayu';
    }

}