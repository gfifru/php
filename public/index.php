<?php

include dirname(__DIR__) . "/services/Autoload.php";

spl_autoload_register([(new Autoload()), 'load']);

$db = new DB();

$good = new Good($db);
$user = new User($db);
$order = new Order($db);

echo $good->getOne(2);
echo '<br>';
echo $good->getAll();
echo '<br>';
echo '<br>';
echo $user->getOne(2);
echo '<br>';
echo $user->getAll();
echo '<br>';
echo '<br>';
echo $order->getOne(2);
echo '<br>';
echo $order->getAll();
