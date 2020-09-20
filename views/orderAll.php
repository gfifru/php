<?php
/**
 * @var \app\models\Order[] $orders
 */
?>

<h1>Заказы</h1>

<div style="display: flex; flex-wrap: wrap;">

    <?php foreach ($orders as $order) : ?>

        <div style="padding: 10px; margin: 10px; border: 1px solid #ececec; text-align: center;">
            <h3><?= $order->id ?></h3>
            <hr>
            <a href="?c=order&a=one&id=<?= $order->id ?>">Подробнее</a>
        </div>

    <?php endforeach; ?>

</div>