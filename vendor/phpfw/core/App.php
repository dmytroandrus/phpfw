<?php 
namespace phpfw\core;

use phpfw\core\Registry;
use phpfw\core\ErrorHandler;

class App
{
    public static $app;

    public function __construct()
    {
        session_start();
        self::$app = Registry::getInstance();
        new ErrorHandler;
    }
}
