<?php


namespace didukh\Logger;


class Singleton
{
    private static array $instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public static function getInstance()
    {
        $subClass = static::class;
        if (!isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static();
        }
        return self::$instances[$subClass];
    }
}