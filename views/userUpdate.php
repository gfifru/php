<?php
/**
 * @var \app\models\User $user
 */

use app\models\User;

?>

<h1>Редактирование пользователя</h1>

<form method="post">
    <input value="<?= $user->name ?>" name="name" placeholder="Имя" required><br><br>
    <input value="<?= $user->login ?>" name="login" placeholder="Логин" required><br><br>
    <input value="<?= $user->password ?>" name="password" placeholder="Пароль" required><br><br>
    <input type="submit" value="Сохранить">
</form>
<hr>