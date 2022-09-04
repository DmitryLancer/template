<?php

namespace model;

use PDO;

class DataBase
{

    public $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');
    }

    public function execute($sql, $parameters)
    {
        $query = $this->dbh->prepare($sql);
        $query->execute($parameters);

        return $query;
    }
    

}