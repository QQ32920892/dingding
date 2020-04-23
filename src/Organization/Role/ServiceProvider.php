<?php

namespace Supen\DingDing\Organization\Role;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['department'] = function ($app) {
            return new Client($app);
        };
    }
}