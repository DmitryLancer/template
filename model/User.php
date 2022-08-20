<?php

namespace model;

class User
{

    public $login1;
    public $password1;
    public $repeatPassword1;
    public $age1;


    public function isLoginValid()
    {
        if (mb_strlen($this->login1) < 5 || mb_strlen($this->login1) > 90) {
            return false;
        } else {
            return true;
        }

    }



    public function isPasswordValid()
    {
        if (mb_strlen($this->password1) > 6) {
            return false;
        } else {
            return true;
        }
    }


}