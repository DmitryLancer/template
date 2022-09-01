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
        if (($_POST['login1'])) {
            return true;
        } else {
            return false;
        }
    }

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
        if ($this->age1 < 18) {
            return false;
        } else {
            return true;
        }
    }

    public function prepareInsertSQL()
    {
        $sql = 'INSERT INTO users (login, password, age) VALUES (:login, :password, :age)';
        return $sql;
    }
    public function prepareParameters()
    {
        $parameters = [
            'login' => $this->login1,
            'password' => $this->password1,
            'age' => $this->age1,
        ];
        return $parameters;
    }


}