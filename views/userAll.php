<?php
/**
 * @var \app\models\User[] $users
 */
?>

<h1>Ползователи</h1>

<div style="display: flex; flex-wrap: wrap;">

    <?php foreach ($users as $user) : ?>

    <div style="padding: 10px; margin: 10px; border: 1px solid #ececec;">

        <h3><?= $user->login ?></h3>

        <hr>

        <a href="?c=user&a=one&id=<?= $user->id ?>">Подробнее</a>

    </div>

    <?php endforeach; ?>

</div>