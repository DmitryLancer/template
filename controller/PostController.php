<?php


if(empty($_POST)) {
    include '../view/post.php';
}


$header = !empty($_POST['header']) ? $_POST['header'] : '';//тернарный оператор
$fast = !empty($_POST['fast']) ? $_POST['fast'] : '';

require_once __DIR__ . '/../model/Post.php';
$post = new \model\Post();


if (!empty($_POST)) {
    if (!$post->strHeader()) {
        echo "Заголовок не может быть меньше 2 или больше 50 символов!";
    } else {
        if(!$post->strFast()) {
            echo "Пост не может быть меньше 10 или больше 250 символов!";
        }
    }

}



if ($post->strHeader() && $post->strFast()) {

    //подключение к БД
    $db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');

    // собираем данные для запроса
    $data = array('header' => $post->header, 'fast' => $post->fast);
    // подготавливаем SQL-запрос
    $query = $db->prepare("INSERT INTO post (header, fast) values (:header, :fast)");
    // выполняем запрос с данными
    $query->execute($data);
    if ($data) {
        echo " Ваш пост сохранен!";
    }
}





//if ($user->isPassword1Valid() && $user->isRepeatPassword1() && $user->isAge1Valid()) {
//    $db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');
//
//    // собираем данные для запроса
//    $data = [
//        ['login' => $user->login1, 'password' => $user->password1, 'age' => $user->age1],
//    ];
//    // подготавливаем SQL-запрос
//    $query = $db->prepare("INSERT INTO users (login, password, age) values (:login, :password, :age)");
//    $query->execute($data[0]);
//    if ($data) {
//        echo " Вы успешно зарегистрировались!";
//    }
//}



?>
<html>
<head>
    <title>Обработка POST-запроса</title>
</head>
<body>

</body>
</html>