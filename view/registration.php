<?php
?>

<html>

<head>
    <meta charset='utf-8'>
    <title>Форма регистрации</title>
</head>

<body>
<form action='../index.php' method='post'>
    <label>
        <input type='text' required placeholder='Логин №1' name='login1'>
    </label>
    <br>
    <label>
        <input type='password' required placeholder='Пароль №1 не менее 6 символов' name='password1'>
    </label>
    <br>
    <label>
        <input type='password' required placeholder='Повторите пароль №1' name='repeatPassword1'>
    </label>
    <br>
    <label>
        <input type='number' required placeholder='Возраст №1' name='age1'>
    </label>
    <br>
    <br>
    <br>
    <input type='submit' value='Отправить'>
<!--    <input type="hidden" value="registration" name="action">-->

</form>
<br>
<br>
<br>
<a href="../login.php">Уже зарегистрирован!</a><br><br><br>
<a href="../post.php">Напишем пост?</a>
</body>
</html>