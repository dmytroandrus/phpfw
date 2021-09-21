<?php

namespace phpfw\Core;

use phpfw\core\traits\TSingletone;

class Registry
{
    use TSingletone;
    public static $objects = [];

    protected function __construct()
    {
        $config = require ROOT . '/config/config.php';

        foreach ($config['components'] as $name => $component) {
            self::$objects[$name] = new $component;
        }
    }

    public function __get($name)
    {
        if (is_object(self::$objects[$name])) {
            return self::$objects[$name];
        }
        
    }

    public function __set($name, $obj)
    {
        if (!isset(self::$objects[$name])) {
            self::$objects[$name] = new $obj;
        }
    }

    public function getList()
    {
        echo "<pre>";
        var_dump(self::$objects);
    }
}
