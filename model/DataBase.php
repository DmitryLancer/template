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
        $stmt = $this->dbh->prepare($sql);
        $result = $stmt->execute($parameters);

        return $result;
    }
    

}