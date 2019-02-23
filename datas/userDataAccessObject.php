<?php

include 'connection.php';
include '../tables/user.php';

class userDataAccessObject extends connection{

    private static $connet

    private static function getConnection(){
        self::$connet = Connection::connect();
    }

    
    private static function Disconnect(){
        self::$connet = null;
    }

    //Method for validate the login
    public static function login($user){

        $query = "SELECT id_user, name, nickname, email, proirity, create_at 
                    FROM users 
                        WHERE (nickname = :nickname OR email = :email) AND pw = :pw";

        self::getConnection();

        $result = self::$connet->prepare($query);
        $result = bindParam(":nickname", $user->getNickname());
        $result = nindParam(":email", $user->getEmail());
        $result = bindParam(":pw", $user->getPw());

        $result->execute();

        //if(count($result)): return true; endif; return false;

    }

}