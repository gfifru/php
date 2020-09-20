<?php
/**
 * @var \app\models\Good[] $goods
 */
?>

<h1>Товары</h1>

<div style="display: flex; flex-wrap: wrap;">

    <?php foreach ($goods as $good) : ?>

        <div style="padding: 10px; margin: 10px; border: 1px solid #ececec; text-align: center;">
            <h3><?= $good->name ?></h3>
            <p><img style="width:100px;" src="/img/item.jpg" alt="item"></p>
            <p><?= $good->price ?> ₽</p>
            <p><?= $good->info ?></p>
            <hr>
            <a href="?c=good&a=one&id=<?= $good->id ?>">Подробнее</a>
        </div>

    <?php endforeach; ?>

</div>