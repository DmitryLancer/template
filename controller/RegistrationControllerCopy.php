<?php
//
//namespace controller;
//
//use PDO;
//
//class RegistrationController
//{
//
////    public function actionIndex()
////    {
////        include __DIR__ . '/../view/registration.php';
////        require_once __DIR__ . '/../model/User.php';
////        $user = new \model\User();
////
////        $user->login1 = $this->cleanParameters('login1');
////        $user->password1 = $this->cleanParameters('password1');
////        $user->RepeatPassword1 = $this->cleanParameters('RepeatPassword1');
////        $user->age1 = $this->cleanParameters('age1');
////
////
////
////    }
//
////// СТАРЬЕ НИЖЕ
//    public function actionRegistration()
//    {
//        if (empty($_POST)) {
//            include __DIR__ . '/../view/registration.php';
//        } else {
//
//
//            $login1 = !empty($_POST['login1']) ? $_POST['login1'] : '';//тернарный оператор
//            $password1 = !empty($_POST['password1']) ? $_POST['password1'] : '';
//            $repeatPassword1 = !empty($_POST['repeatPassword1']) ? $_POST['repeatPassword1'] : '';
//            $age1 = !empty($_POST['age1']) ? $_POST['age1'] : '';
//            if (strlen($password1) < 6) {
//                echo "Пароль №1 содержит меньше 6 символов!";
//                include __DIR__ . '../view/registration.php';
//            } elseif ($repeatPassword1 != $password1) {
//                echo "Пароли №1 не совпадают, пожалуйста, заполните форму еще раз!";
//                include __DIR__ . '../view/registration.php';
//            } elseif ($age1 < 18) {
//                echo 'Кому-то сюда нельзя!';
//            } else {
//                echo 'Привет!';
//
//                try {
//                    //подключение к БД
//                    $db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');
//                } catch (PDOException $e) {
//                    //при наличиек ошибки выводит ее
//                    print "Что-то пошло не так. Ошибка!: " . $e->getMessage() . "<br/>";//???getMessage
//                }
//                // собираем данные для запроса
//                $data = [
//                    ['login' => $login1, 'password' => $password1, 'age' => $age1],
//                ];
//                // подготавливаем SQL-запрос
//                $query = $db->prepare("INSERT INTO users (login, password, age) values (:login, :password, :age)");
//                $query->execute($data[0]);
//                if ($data) {
//                    echo " Вы успешно зарегистрировались!";
//                }
//
//            }
//        }
//    }
//    
//    
}