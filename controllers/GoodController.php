<?php

namespace app\controllers;
use app\models\Good;

class GoodController
{

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
        $goods = Good::getAll();
        return $this->render( 'goodAll', ['goods' => $goods]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $good = Good::getOne($id);
        return $this->render( 'goodOne', ['good' => $good]);

    }

    public function render($template, $params = [])
    {
        $content = $this->renderTpl($template, $params);
        return $this->renderTpl(
            'layouts/main',
            [
                'content' => $content,
//                'title' => 'Товар',
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