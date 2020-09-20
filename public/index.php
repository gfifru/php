<?php

use app\services\Autoload;
use app\models\Good;
use app\models\User;
use app\models\Order;
use app\services\DB;

include dirname(__DIR__) . "/services/Autoload.php";
spl_autoload_register([(new Autoload()), 'load']);

$controllerName = 'index';

if (!empty(trim($_GET['c']))) {
    $controllerName = trim($_GET['c']);
}

$actionName = '';

if (!empty(trim($_GET['a']))) {
    $actionName = trim($_GET['a']);
}

$controllerClass = 'app\\controllers\\' . ucfirst($controllerName) . 'Controller';

if (class_exists($controllerClass)) {

    $controller = new $controllerClass();
    echo $controller->run($actionName);
} else {
    echo '404';
}
