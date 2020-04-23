<?php
namespace Supen\DingDing\Provider;

use Supen\DingDing\Facades\DingDing;
use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    public $config;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('DingDing', function ($app) {
            $this->config = $app['config']['dingding'];
            return new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI,\DingTalkConstant::$METHOD_POST,\DingTalkConstant::$FORMAT_JSON);
        });

        $this->registerAliases();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/dingding.php');

        $this->publishes([$path => config_path('dingding.php')], 'config');
    }

    public function registerAliases()
    {
        $this->app->alias('DingDing', DingDing::class);
    }
}