<?php
//connection with database

class Connection{

    public static function connect(){

        try {
            $conn = new PDO("mysql:host=localhost; dbname=php_mysql_crud", "root", "");

            //return the connection
            return $conn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }

    }

}

//Connection::connect();


