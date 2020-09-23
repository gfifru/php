<?php
/**
 * @var \app\models\User $user
 */

use app\models\User;

?>

<div style="padding: 10px; margin: 10px; border: 1px solid #ececec;">

    <h1><?= $user->login ?></h1>
    <p>Имя: <strong><?= $user->name ?></strong></p>
    <p>Логин: <strong><?= $user->login ?></strong></p>
    <hr>
    <a href="?c=user&a=all">Назад</a>
    <a href="?c=user&a=del&id=<?= $user->id ?>">Удалить</a>
    <a href="?c=user&a=update&id=<?= $user->id ?>">Редактировать</a>

</div>


<?php

var_dump($user = User::getOne($user->id));