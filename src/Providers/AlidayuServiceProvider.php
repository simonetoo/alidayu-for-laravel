<?php

namespace Vicens\Alidayu\Providers;

use Illuminate\Support\ServiceProvider;
use Vicens\Alidayu\Alidayu;

class AlidayuServiceProvider extends ServiceProvider
{
    /**
     * 按需加载
     * @var bool
     */
    protected $defer = true;

    /**
     * 注册服务
     */
    public function register()
    {
        //注册到容器中
        $this->app->singleton('alidayu', function () {

            $config = $this->app->make('config')->get('services.alidayu', array());

            return Alidayu::setConfig($config);
        });
    }

    /**
     * 延迟加载的服务
     *
     * @return array
     */
    public function provides()
    {
        return ['alidayu'];
    }

}