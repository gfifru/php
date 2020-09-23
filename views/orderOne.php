<?php
/**
 * @var \app\models\Order $order
 */

$items = json_decode($order->items, true);

?>

<div style="padding: 10px; margin: 10px; border: 1px solid #ececec;">

    <h1>Заказ № <?= $order->id ?></h1>

    <p>Товары:</p>

<?php foreach ($items as $item) : ?>

    <?php
    $total = $item['price'] * $item['count'];
//    var_dump($total);
    ?>

    <div style="border:1px solid black; padding:20px; margin:10px;">
        <?= $item['name'] ?><br>
        Кол-во: <?= $item['count'] ?><br>
        Стоимость: <?= $item['price'] * $item['count'] ?> ₽<br>
    </div>

<?php endforeach; ?>
    <hr>

    <a href="?c=order&a=all">Назад</a>

    <a href="?c=order&a=del&id=<?= $order->id ?>">Удалить</a>

</div>