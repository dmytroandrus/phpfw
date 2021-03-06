<?php
namespace phpfw\core;

class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        }else {
            error_reporting(0);
        }
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']);
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->logErrors($errstr, $errfile, $errline);
        // error_log("[". date('Y-m-d H:i:s') ."] Текст ошибки: {$errstr} | Файл: {$errfile} | Строка: {$errline} \n=================\n", 3, __DIR__ . '/errors.log');
        $this->displayErrors($errno, $errstr, $errfile, $errline);
        return true;
    }

    public function fatalErrorHandler()
    {
        $error = error_get_last();
        if(!empty($error) && $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)){
            $this->logErrors($error['message'], $error['file'], $error['line']);
            // error_log("[". date('Y-m-d H:i:s') ."] Текст ошибки: {$error['message']} | Файл: {$error['file']} | Строка: {$error['line']} \n=================\n", 3, __DIR__ . '/errors.log');
            ob_get_clean();
            $this->displayErrors($error['type'], $error['message'], $error['file'], $error['line']);
        }else {
            ob_end_flush();
        }
    }

    public function exceptionHandler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        // error_log("[". date('Y-m-d H:i:s') ."] Текст ошибки: {$e->getMessage()} | Файл: {$e->getFile()} | Строка: {$e->getLine()} \n=================\n", 3, __DIR__ . '/errors.log');
        $this->displayErrors('Исключение', $e->getMessage(), $e->getFile(), $e->getLine());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[". date('Y-m-d H:i:s') ."] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line} \n=================\n", 3, WWW . '/tmp/errors.log');
        
    }

    protected function displayErrors($errno, $errstr, $errfile, $errline, $response = 500)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWW . '/errors/404.html';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        }else {
            require WWW . '/errors/prod.php';
        }
        die;
    }
}