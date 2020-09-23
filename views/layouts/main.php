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
    <li><a href="?c=user&a=all">Пользователи</a></li>
    <li><a href="?c=user&a=add">Добавить пользователя</a></li>
    <li><a href="?c=good&a=all">Товары</a></li>
    <li><a href="?c=order&a=all">Заказы</a></li>
</ul>

<?= $content ?>

</body>
</html>