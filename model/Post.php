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

        if (strlen($this->header) > 50 || strlen($this->header) < 2) {
            return true;
        } else {
            return false;
        }

    }


    public function strFast()
    {

        if (strlen($this->fast) > 250 || strlen($this->fast) < 10) {
            return true;
        } else {
            return false;
        }

    }


}