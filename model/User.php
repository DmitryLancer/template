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
        if (($_POST['login1'])) {
            return true;
        } else {
            return false;
        }
    }

//        if (empty($_POST['login1']) {
//            '';
//        }
//
//    }


    public function isPassword1Valid()
    {
        if (mb_strlen($this->password1) < 6) {
            return false;
        } else {
            return true;
        }
    }

    public function isRepeatPassword1()
    {
        if ($this->repeatPassword1 != $this->password1)  {
            return false;
        } else {
            return true;
        }
    }

    public function isAge1Valid()
    {
        if (mb_strlen($this->age1) < 18) {
            return false;
        } else {
            return true;
        }
    }


}