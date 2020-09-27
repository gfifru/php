<?php

namespace app\controllers;

use app\services\RenderInt;
use app\services\RenderServices;
use app\services\Request;

abstract class Controller
{
    protected $defaultAction = 'all';

    /**
     * @var RenderServices
     */
    protected $renderer;

    /**
     * @var Request
     */
    protected $request;

    /**
     * Controller constructor.
     * @param $renderer
     */
    public function __construct(RenderInt $renderer, Request $request){
        $this->renderer = $renderer;
        $this->request = $request;
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
        return $this->request->getId();
    }
}