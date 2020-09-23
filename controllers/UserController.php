<?php

namespace app\controllers;

use app\models\Order;
use app\models\User;

class UserController extends Controller
{
    public function allAction()
    {
        $users = User::getAll();
        return $this->renderer->render(
            'userAll',
            [
                'users' => $users,
            ]
        );
    }

    public function oneAction()
    {
        $id = $this->getId();
        $user = User::getOne($id);

        return $this->renderer->render(
            'userOne',
            [
                'user' => $user,
                'title' => 'Пользователь ' . $user->name,
            ]
        );

    }

    public function insertAction()
    {
        $user = new User();
        $user->name = 'Grisha';
        $user->login = 'Gri';
        $user->password = '1234';
        $user->save();

        header('location: ?c=user');
    }

    public function addAction()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return $this->renderer->render(
                'userAdd',
                [
                    'title' => 'Добавление пользователя',
                ]
            );
        }

        $user = new User();
        $user->name = $_POST['name'];
        $user->login = $_POST['login'];
        $user->password = $_POST['password'];
        $user->save();

        header('location: ?c=user');

        return '';
    }

    public function updateAction()
    {
        $id = $this->getId();
        $user = User::getOne($id);

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return $this->renderer->render(
                'userUpdate',
                [
                    'user' => $user,
                    'title' => 'Редактирование пользователя',
                ]
            );
        }

        $user->name = $_POST['name'];
        $user->login = $_POST['login'];
        $user->password = $_POST['password'];
        $user->save();

        header('location: ?c=user&a=one&id=' . $id);
    }

    public function delAction()
    {
        $id = $this->getId();
        User::delete($id);
        return header('location: ?c=user');
    }
}