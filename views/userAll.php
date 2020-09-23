<?php
/**
 * @var \app\models\User[] $users
 */
?>

<h1>Ползователи</h1>

<div style="display: flex; flex-wrap: wrap;">

    <?php foreach ($users as $user) : ?>

    <div style="padding: 10px; margin: 1%; border: 1px solid #ececec; flex-grow: 1; width: calc(94% / 3); box-sizing: border-box;">
        <h3><?= $user->login ?></h3>
        <p><?= $user->name ?></p>
        <hr>
        <a href="?c=user&a=one&id=<?= $user->id ?>">Подробнее</a>
    </div>

    <?php endforeach; ?>

</div>