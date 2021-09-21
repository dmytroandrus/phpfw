<?php

namespace app\Controllers;

use R;
use phpfw\core\App;

use app\models\Main;
use phpfw\libs\Pagination;

class MainController extends AppController
{
    public $layout;

    public function indexAction()
    {
        $this->view = 'index';
        $this->layout = LAYOUT;

        // RedBean
        $title = 'Главная';
        $model = new Main;

        $lang = (App::$app->getProperty('lang')['code']);
        $total = \R::count('posts', 'lang_code = ?', [$lang]);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = 2;
        $pagination = new Pagination($page, $perPage, $total);
        $start = $pagination->getStart();

        $posts = R::findAll('posts', "lang_code = ? ORDER BY created_at DESC LIMIT $start, $perPage", [$lang]);
        $allPosts = R::findAll('posts', "lang_code = ? ORDER BY created_at DESC", [$lang]);
        $menu = R::findAll('categories');
        $categories = R::findAll('categories', "parent = 0");
        $this->set(compact('title', 'posts', 'allPosts', 'menu', 'pagination', 'total', 'categories'));
    }
}
