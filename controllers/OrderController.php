<?php

namespace app\controllers;
use app\models\Order;

class OrderController
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
        $orders = Order::getAll();
        return $this->render( 'orderAll', ['orders' => $orders]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $order = Order::getOne($id);
        return $this->render( 'orderOne', ['order' => $order]);

    }

    public function delAction(){
        $id = $this->getId();
        Order::delete($id);
        return header('location: ?c=order');
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