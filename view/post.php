<?php
?>

<html>

<head>
    <meta charset='utf-8'>
    <title>Форма для написания поста</title>
</head>

<body>
<form action='../controller/PostController.php' method='post'>
    <p>Заголовок</p>
    <label>
        <input type='text' size='40' required placeholder='Не менее 2 и не более 50 символов!' name='header'>
    </label>
    <br>
    <p>Поле для поста</p>
    <label>
        <input type='text' size='40' required placeholder='Не менее 10 и не более 250 символов!' name='fast'>
    </label>
    <br><br><br>

    <input type='submit' value='Отправить'>

</form>
<br>
<br>
<br>

</body>
</html>
