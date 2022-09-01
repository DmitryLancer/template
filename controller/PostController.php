<?php

namespace controller;

use model\DataBase;
use PDO;


class PostController
{

    public function actionPostAdd()
    {
        if(empty($_POST)) {
            include '../view/post.php';
        }

        require_once __DIR__ . '/../model/Post.php';
        $post = new \model\Post();

        $post->header = !empty($_POST['header']) ? $_POST['header'] : '';//тернарный оператор
        $post->fast = !empty($_POST['fast']) ? $_POST['fast'] : '';




        if (!empty($_POST)) {
            if (!$post->strHeader()) {
                echo "Заголовок не может быть меньше 2 или больше 50 символов!";
            } else {
                if(!$post->strFast()) {
                    echo "Пост не может быть меньше 10 или больше 250 символов!";
                }
            }

        }

//        //подключение к БД
//        $db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');
//
//        // собираем данные для запроса
//        $data = array('header' => $post->header, 'fast' => $post->fast);
//        // подготавливаем SQL-запрос
//        $query = $db->prepare("INSERT INTO post (header, fast) values (:header, :fast)");
//        // выполняем запрос с данными
//        $query->execute($data);
//        if ($data) {
//            echo " Ваш пост сохранен!";
//        }

        if ($post->strHeader() && $post->strFast()) {

            require_once __DIR__ . '/../model/DataBase.php';
            $database = new DataBase();

            $sql = $post->prepareInsertSQL();
            $parameters = $post->prepareParameters();

            $database->execute($sql, $parameters);

            echo " Ваш пост сохранен!";

        }
    }
    }











