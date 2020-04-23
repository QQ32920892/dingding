<?php
namespace Supen\DingDing;

use Supen\Supports\Str;

/**
 * Class Factory.
 *
 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return \Supen\DingDing\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\Supen\\DingDing\\{$namespace}\\Application";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}