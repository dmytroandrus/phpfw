<?php

namespace phpfw\core\base;

use phpfw\core\App;

class View
{
    protected $route;
    protected $view;
    protected $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        if ($this->layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout;
        }
        $this->view = $view;
    }

    public function render($vars)
    {
        extract($vars);
        Lang::load(App::$app->getProperty('lang'), $this->route);
        $this->route['prefix'] = str_replace('\\', '/', $this->route['prefix']);
        $file_view = APP . "/views/{$this->route['prefix']}{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (is_file($file_view)) {
            require $file_view;
        } else {
            throw new \Exception("<p>Не найден вид <b>$file_view</b></p>", 404);
        }

        $content  = ob_get_clean();
        if (false !== $this->layout) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)) {
                require $file_layout;
            } else {
                throw new \Exception("<p>Не найден шаблон <b>$file_layout</b></p>", 404);
            }
        }
    }

    public function getPart($path)
    {
        $file = APP . "/views/{$path}.php";
        if(file_exists($file)){
            include_once $file;
        }else {
            echo "Part is not found";
        }
        
    }
}
