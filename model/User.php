<?php

namespace model;

class User
{

    public $login;
    public $password;
    public $repeatPassword;
    public $age;
    

    public function isLoginValid()
    {
        if (($_POST['login'])) {
            return true;
        } else {
            return false;
        }
    }

    public function isPasswordValid()
    {
        if (mb_strlen($this->password) < 6) {
            return false;
        } else {
            return true;
        }
    }

    public function isRepeatPassword()
    {
        var_dump($this->repeatPassword);
        var_dump($this->password);
        if ($this->repeatPassword != $this->password)  {
            return false;
        } else {
            return true;
        }
    }

    public function isAgeValid()
    {
        if ($this->age < 18) {
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
            'login' => $this->login,
            'password' => $this->password,
            'age' => $this->age,
        ];
        return $parameters;
    }


}