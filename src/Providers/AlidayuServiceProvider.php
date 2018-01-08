<?php

namespace Vicens\Alidayu\Providers;

use Illuminate\Support\ServiceProvider;
use Vicens\Alidayu\Alidayu;

class AlidayuServiceProvider extends ServiceProvider
{

    public function boot()
    {

        // 启动时设置配置
        $config = $this->app->make('config')->get('services.alidayu', array());

        return Alidayu::setConfig($config);
    }
}