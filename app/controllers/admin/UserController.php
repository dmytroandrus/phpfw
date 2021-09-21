<?php

namespace app\controllers\Admin;

use app\models\User;

class UserController extends AppController
{
    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if (!$user->login(true)) {
                $_SESSION['error'] = 'Логин или пароль введены неверно';
            }
            if (User::isAdmin()) {
                redirect(ADMIN);
            } else {
                redirect();
            }
        }
        $this->layout = 'login';
    }
}
