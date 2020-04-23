<?php
namespace Supen\DingDing\Base;

use Supen\DingDing\ServiceContainer;
/**
 * Class Application.
 *
 * @property \Supen\DingDing\Base\OAuth\Client           $oauth
 * @property \Supen\DingDing\Base\User\Client            $user
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        OAuth\ServiceProvider::class,
        User\ServiceProvider::class
    ];
}