<?php

namespace app\controllers;
use app\models\Order;

class OrderController extends Controller
{

    public function allAction()
    {
        $orders = Order::getAll();
        return $this->renderer->render( 'orderAll', ['orders' => $orders]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $order = Order::getOne($id);
        return $this->renderer->render( 'orderOne', ['order' => $order]);

    }

    public function delAction()
    {
        $id = $this->getId();
        Order::delete($id);
        return header('location: ?c=order');
    }
}
