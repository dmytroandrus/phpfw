<?php

namespace app\controllers\Admin;

use phpfw\core\App;
use app\models\Main;
use app\models\User;
use phpfw\core\base\Controller;
use phpfw\widgets\language\Language;

class AppController extends Controller
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
        App::$app->setProperty('langs', Language::getLanguages());
        App::$app->setProperty('lang', Language::getLanguage(App::$app->getProperty('langs')));
        
        if(!User::isAdmin() && $route['action'] != 'login'){
            redirect(ADMIN . '/user/login');
        }
        new Main;
    }
}