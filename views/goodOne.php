<?php
/**
 * @var \app\models\good $good
 */
?>

<div style="padding: 10px; margin: 10px; border: 1px solid #ececec; width: 300px;">

    <h1><?= $good->name ?></h1>
    <p><img style="width:100%;" src="/img/item.jpg" alt="item"></p>
    <p>Цена: <?= $good->price ?></p>
    <p>Инфо: <?= $good->info ?></p>
    <hr>
    <a href="?c=good">Назад</a>

</div>