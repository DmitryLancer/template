<?php

namespace model;



class Post
{



    public $header;
    public $fast;
    


//if(strlen($header) > 50 || strlen($header) < 2) {
//echo "Заголовок не может быть меньше 2 или больше 50 символов!";
//include 'view/post.php';
//}
//elseif(strlen($fast) > 250 || strlen($fast) < 10) {
//        echo "Пост не может быть меньше 10 или больше 250 символов!";
//            include 'view/post.php';
//        }


    public function strHeader()
    {

        if (strlen($this->header) < 2 || strlen($this->header) > 50) {
            return false;
        } else {
            return true;
        }

    }
    

    public function strFast()
    {

        if (strlen($this->fast) < 10 || strlen($this->fast) > 250) {
            return false;
        } else {
            return true;
        }

    }


    public function prepareInsertSQL()
    {
        $sql = 'INSERT INTO post (header, fast) VALUES (:header, :fast)';
        return $sql;
    }
    public function prepareParameters()
    {
        $parameters = [
            'header' => $this->header,
            'fast' => $this->fast,
        ];
        return $parameters;
    }


}