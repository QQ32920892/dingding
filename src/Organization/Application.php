<?php
namespace Supen\DingDing\Organization;

use Supen\DingDing\ServiceContainer;
/**
 * Class Application.
 *
 * @property \Supen\DingDing\Organization\Departmenrt    $department
 * @property \Supen\DingDing\Organization\Role           $role
 * @property \Supen\DingDing\Organization\user           $user
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Departmenrt\ServiceProvider::class
    ];
}