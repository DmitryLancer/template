<?php


if(empty($_POST)) {
    include 'view/post.php';
} else {


    $header = !empty($_POST['header']) ? $_POST['header'] : '';//тернарный оператор
    $fast = !empty($_POST['fast']) ? $_POST['fast'] : '';

    require_once __DIR__ . '/model/Post.php';
    $post = new \model\Post();

//        if(strlen($header) > 50 || strlen($header) < 2) {
//            echo "Заголовок не может быть меньше 2 или больше 50 символов!";
//            include 'view/post.php';
//        } elseif
        if (!$post->strHeader()) {
            echo "Заголовок не может быть меньше 2 или больше 50 символов!";
        }
    
        if(strlen($fast) > 250 || strlen($fast) < 10) {
        echo "Пост не может быть меньше 10 или больше 250 символов!";
            include 'view/post.php';
        }

        elseif ($header!= '') {
            try {
                //подключение к БД
                $db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');
            } catch (PDOException $e) {
                //при наличиек ошибки выводит ее
                print "Что-то пошло не так. Ошибка!: " . $e->getMessage() . "<br/>";//???getMessage
            }
            // собираем данные для запроса
            $data = array('header' => $header, 'fast' => $fast);
            // подготавливаем SQL-запрос
            $query = $db->prepare("INSERT INTO post (header, fast) values (:header, :fast)");
            // выполняем запрос с данными
            $query->execute($data);
            if ($data) {
                echo " Ваш пост сохранен!";
            }
        }

}


?>
<html>
<head>
    <title>Обработка POST-запроса</title>
</head>
<body>

</body>
</html>