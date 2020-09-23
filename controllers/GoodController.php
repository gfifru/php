<?php

namespace app\controllers;
use app\models\Good;

class GoodController extends Controller
{
    public function allAction()
    {
        $goods = Good::getAll();
        return $this->renderer->render( 'goodAll', ['goods' => $goods]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $good = Good::getOne($id);
        return $this->renderer->render( 'goodOne', ['good' => $good]);

    }
}