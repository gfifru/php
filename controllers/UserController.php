<?php

namespace app\controllers;
use app\models\User;

class UserController
{
//    protected $action;
    protected $defaultAction = 'all';

    public function run($action)
    {
        $this->action = $action;
        if (empty($action)) {
            $action = $this->defaultAction;
        }
        $action .= 'Action';
        if (!method_exists($this, $action)) {
            return '404';
        }
        return $this->$action();
    }

    public function allAction()
    {
        $users = User::getAll();
        return $this->render( 'userAll', ['users' => $users]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $user = User::getOne($id);
        return $this->render( 'userOne', ['user' => $user]);

    }

    public function render($template, $params = [])
    {
        $content = $this->renderTpl($template, $params);
        return $this->renderTpl(
            'layouts/main',
            [
                'content' => $content,
            ]
        );
    }

    public function renderTpl($template, $params = [])
    {
        ob_start();
        extract($params);
        include dirname(__DIR__) . '/views/' . $template . '.php';
        return ob_get_clean();
    }

    protected function getId()
    {
        if (empty($_GET['id'])) {
            return 0;
        }
        return (int)$_GET['id'];
    }
}