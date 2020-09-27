<?php

namespace app\controllers;
use app\models\Order;

class OrderController extends Controller
{

    public function allAction()
    {
        $orders = Order::getAll();
        return $this->renderer->render(
            'orderAll',
            [
                'orders' => $orders
            ]
        );
    }

    public function oneAction()
    {
        $id = $this->getId();
        $order = Order::getOne($id);
        $items = json_decode($order->items, true);
        $result = 0;
        return $this->renderer->render(
            'orderOne',
            [
                'order' => $order,
                'items' => $items,
                'result' => $result,
            ]
        );

    }

    public function delAction()
    {
        $id = $this->getId();
        Order::delete($id);
        return header('location: /order/');
    }
}
