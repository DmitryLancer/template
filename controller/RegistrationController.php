<?php

namespace controller;


use model\DataBase;
use PDO;


class RegistrationController
{

    public function actionRegistration()
    {
        if (empty($_POST)) {
            include __DIR__ . '/../view/registration.php';
        }


        require_once __DIR__ . '/../model/User.php';


        $user = new \model\User();

        $user->login = !empty($_POST['login']) ? $_POST['login'] : '';
        $user->repeatPassword = !empty($_POST['repeatPassword']) ? $_POST['repeatPassword'] : '';
        $user->age = !empty($_POST['age']) ? $_POST['age'] : '';


        if (!empty($_POST['password'])) { 
            $user->password = $_POST['password'];
        } else {
            $user->password = '';
        }

        
        if (!empty($_POST)) {
            if (!$user->isPasswordValid()) {
                echo "Пароль №1 содержит меньше 6 символов!";
            } else {
                if (!$user->isRepeatPassword()) {
                    echo 'Пароли №1 не совпадают, пожалуйста, заполните форму еще раз!';
                } else {
                    if (!$user->isAgeValid()) {
                        echo 'Вам меньше 18 лет!';
                    }
                }
            }
        }

        if ($user->isPasswordValid() && $user->isRepeatPassword() && $user->isAgeValid()) {
            require_once __DIR__ . '/../model/DataBase.php';

            $database = new DataBase();
            $sql = $user->prepareInsertSQL();
            $parameters = $user->prepareParameters();
            $database->execute($sql, $parameters); // вот эту строчку трудно понять

            echo 'Вы успешно зарегистрировались!';


        }
    }
}






