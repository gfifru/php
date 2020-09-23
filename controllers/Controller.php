<?php

namespace app\controllers;

use app\services\RenderInt;
use app\services\RenderServices;

abstract class Controller
{
    protected $defaultAction = 'all';

    /**
     * @var RenderServices
     */
    protected $renderer;

    /**
     * Controller constructor.
     * @param $renderer
     */
    public function __construct(RenderInt $renderer){
        $this->renderer = $renderer;
    }

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

    protected function getId()
    {
        if (empty($_GET['id'])) {
            return 0;
        }
        return (int)$_GET['id'];
    }
}