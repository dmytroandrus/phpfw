<?php

namespace app\Controllers;

use phpfw\core\App;
use phpfw\core\base\Controller;
use phpfw\widgets\language\Language;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        App::$app->setProperty('langs', Language::getLanguages());
        App::$app->setProperty('lang', Language::getLanguage(App::$app->getProperty('langs')));
    }
}
