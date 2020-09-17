<?php

use app\services\Autoload;
use app\models\Good;
use app\models\User;
use app\models\Order;
use app\services\DB;

include dirname(__DIR__) . "/services/Autoload.php";

spl_autoload_register([(new Autoload()), 'load']);

$db = DB::getInstance();

$good = new Good($db);
$user = new User($db);

//$goodModel = $good->getOne(2);
//var_dump($goodModel);
//echo '<br>';
//echo '<br>';
//$userModel = $user->getOne(7);
//var_dump($userModel);
//echo '<br>';
//echo '<br>';
//$users = $user->getAll();
//var_dump($users);
//var_dump($db->getConnection());

//$user->name = 'Petya';
//$user->login = 'Petya777';
//$user->password = '12345';

//$user->delete(23);


