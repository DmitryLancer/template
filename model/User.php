<?php

namespace model;

class User
{

    public $login1;
    public $password1;
    public $repeatPassword1;
    public $age1;

//$login1 = !empty($_POST['login1']) ? $_POST['login1'] : '';

    public function isLoginValid()
    {
        if (empty($_POST['login1'])) {
            echo 'чего ты охуел что ли?)) ';
        }
    }

//        if (empty($_POST['login1']) {
//            '';
//        }
//
//    }


    public function isPassword1Valid()
    {
        if (mb_strlen($this->password1) > 6) {
            return false;
        } else {
            return true;
        }
    }

//    public function isRepeatPassword1()
//    {
//        if (mb_strlen(($this->repeatPassword1 != ($this->$password1))  {
//            echo 'Пароли №1 не совпадают, пожалуйста, заполните форму еще раз!';
//        }
//    }

    public function isAge1Valid()
    {
        if (mb_strlen($this->age1) > 18) {
            return false;
        } else {
            return true;
        }
    }


}