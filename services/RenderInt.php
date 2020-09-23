<?php


namespace app\services;


interface RenderInt
{
    public function render($template, $params = []);
}