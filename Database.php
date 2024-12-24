<?php

class Database{

    /*
    * connect to the database
    * author <rooneyi/github.com>
    */
    public function query($query){
        $dsn = "mysql:host=localhost;port=3306;dbname=blog";
        $username = "root";
        $password = "";
        $db  = new PDO($dsn,$username,$password);

        $pdoStatement = $db-> prepare($query);
        $pdoStatement->execute();

        return $pdoStatement;

    }
}