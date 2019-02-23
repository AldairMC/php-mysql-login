<?php

class user{

    private $id_user;
    private $name;
    private $nickname;
    private $email;
    private $pw;
    private $priority;
    private $create_at;

    public function getId_user(){
        return $this->$id_user;
    }

    public function setId_user($id_user){
        $this->id_user = $id_user;
    }

    public function getName(){
        return $this->$name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getNickname(){
        return $this->$nickname;
    }

    public function setNickname($nickname){
        $this->nickname = $nickname;
    }

    public function getEmail(){
        return $this->$email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPw(){
        return $this->$pw;
    }

    public function setPw($pw){
        $this->pw = $pw;
    }

    public function getPriority(){
        return $this->$priority;
    }

    public function setPriority($priority){
        return $this->$priority;
    }

    public function getCreate_at(){
        return $this->$create_at;
    }

    public function setCreate_at($create_at){
        $this->create_at = $create_at;
    }







}