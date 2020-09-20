<?php
/**
 * @var string $content
 * @var string $title
 */
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>

<ul>
    <li><a href="?c=user">Пользователи</a></li>
    <li><a href="?c=good">Товары</a></li>
    <li><a href="?c=order">Заказы</a></li>
</ul>

<?= $content ?>

</body>
</html>