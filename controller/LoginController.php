<?php

namespace controller;

use model\User;
use model\DataBase;
use PDO;

class LoginController
{
    
    public function actionLogin()
    {

        if (empty($_POST)) {
            include '../view/login.php';
        } else {
            $user = new User();
            $user->login = !empty($_POST['login']) ? $_POST['login'] : '';
            $user->password = !empty($_POST['password']) ? $_POST['password'] : '';

            $database = new DataBase();

            $sql = "SELECT login FROM users WHERE login = :login";

            $paramsLogin = array('login' => $user->login);
            $query = $database->execute($sql, $paramsLogin);
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

            $paramsPassword = array('password' => $user->password);
            $sql = "SELECT password FROM users WHERE password = :password";

            $query = $database->execute($sql, $paramsPassword);
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
                print_r($paramsLogin['login']);
                echo '! Вы успешно прошли авторизацию!';
            }
        }
    }
}