<?php

namespace app\controllers;
use app\models\Good;

class GoodController extends Controller
{
    public function allAction()
    {
        $goods = Good::getAll();
        return $this->renderer->render(
            'goodAll',
            [
                'goods' => $goods,
            ]
        );
    }

    public function oneAction()
    {
        $id = $this->getId();
        $good = Good::getOne($id);
        return $this->renderer->render(
            'goodOne',
            [
                'good' => $good,
            ]
        );
    }

    public function addAction()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return $this->renderer->render(
                'goodAdd',
            );
        }

        $fileDir = '/Applications/MAMP/htdocs/php2/public/img/';
        $fileName = $fileDir . '/' . basename($_FILES['userfile']['name']);
        move_uploaded_file($_FILES['userfile']['tmp_name'], $fileName);

        $good = new Good();
        $good->name = $_POST['name'];
        $good->price = $_POST['price'];
        $good->info = $_POST['info'];
        $good->image = $_FILES['userfile']['name'];
        $good->save();

        header('location: /good/');

        return '';
    }
}