<?php

namespace controller;

use PDO;

class LoginController
{
    
    public function actionLogin()
    {

        if (empty($_POST)) {
            include '../view/login.php';
        } else {
            require_once __DIR__ . '/../model/User.php';
            $user = new \model\User();
            $user->login = !empty($_POST['login']) ? $_POST['login'] : '';
            $user->password = !empty($_POST['password']) ? $_POST['password'] : '';

                //подключение к БД
            require_once __DIR__ . '/../model/DataBase.php';

            $database = new \model\DataBase();


            $data1 = array('login' => $user->login);
            $query = $database->dbh->prepare("SELECT login FROM users WHERE login = :login");
            $query->execute($data1);
            $result = $query->fetchAll();
            //var_dump($data);
            $nnn = 0;
            $mmm = 0;
            if (count($result)) {
                foreach ($result as $row) {
                    $nnn = 1;
                }
            } else {
                echo "Ошибка логина!";
            }

            $data2 = array('password' => $user->password);
            $query = $database->dbh->prepare("SELECT password FROM users WHERE password = :password");
            $query->execute($data2);
            $result = $query->fetchAll();
            echo '<br>';
            if (count($result)) {

                foreach ($result as $row) {
                    $mmm = 1;
                }
            } else {
                echo "Ошибка пароля!";
            }
            if ($nnn == 1 && $mmm == 1) {
                print_r($data1['login']);
                echo '! Вы успешно прошли авторизацию!';
            }
        }
    }
}