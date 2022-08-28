<?php

namespace controller;

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

        $user->login1 = !empty($_POST['login1']) ? $_POST['login1'] : '';
        $user->repeatPassword1 = !empty($_POST['repeatPassword1']) ? $_POST['repeatPassword1'] : '';
        $user->age1 = !empty($_POST['age1']) ? $_POST['age1'] : '';

//$user->repeatPassword1 = !empty($_POST['repeatPassword1']) ? $_POST['repeatPassword1'] : '';





        if (!empty($_POST['password1'])) { /// должен быть password1 или login1? ???
            $user->password1 = $_POST['password1'];
        } else {
            $user->password1 = '';
        }



// elseif ($repeatPassword2 != $password2){
        if (!empty($_POST)) {
            if (!$user->isPassword1Valid()) {
                echo "Пароль №1 содержит меньше 6 символов!";
            } else {
                if (!$user->isRepeatPassword1()) {
                    echo 'Пароли №1 не совпадают, пожалуйста, заполните форму еще раз!';
                } else {
                    if (!$user->isAge1Valid()) {
                        echo 'Вам меньше 18 лет!';
                    }
                }
            }
        }



        if ($user->isPassword1Valid() && $user->isRepeatPassword1() && $user->isAge1Valid()) {
            $db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');

            // собираем данные для запроса
            $data = [
                ['login' => $user->login1, 'password' => $user->password1, 'age' => $user->age1],
            ];
            // подготавливаем SQL-запрос
            $query = $db->prepare("INSERT INTO users (login, password, age) values (:login, :password, :age)");
            $query->execute($data[0]);
            if ($data) {
                echo " Вы успешно зарегистрировались!";
            }
        }
    }

}








