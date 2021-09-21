<?php

namespace app\controllers;

use app\Controllers\AppController;
use app\models\User;

class UserController extends AppController
{
    public $layout;

    public function signUpAction()
    {
        $this->layout = 'main';

        if (!empty($_POST)) {
            $data = $_POST;
            $user = new User;
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);

            if ($user->save('users')) {
                $_SESSION['success'] = 'Вы успешно зарегистрированы!';
            } else {
                $_SESSION['error'] = 'Ошибка, попробуйте позже';
            }
            redirect();
            die;
        }
    }

    public function loginAction()
    {
        $this->layout = 'main';
        if (!empty($_POST)) {
            $user = new User;
            if ($user->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
            } else {
                $_SESSION['error'] = 'Неверный логин или пароль';
            }
            redirect();
        }
    }

    public function logoutAction()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        redirect('/user/login');
    }
}
