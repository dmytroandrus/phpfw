<?php
namespace phpfw\core\traits;

trait TSingletone
{
    protected static $instance;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}