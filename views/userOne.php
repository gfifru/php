<?php
/**
 * @var \app\models\User $user
 */
?>

<div style="padding: 10px; margin: 10px; border: 1px solid #ececec;">

    <h1><?= $user->login ?></h1>

    <p>Имя: <?= $user->name ?></p>

    <hr>

    <a href="?c=user&a=all">Назад</a>

</div>