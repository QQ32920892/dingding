<?php

namespace Supen\DingDing\Base\OAuth;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['oauth'] = function ($app) {
            return new Client($app);
        };
    }
}