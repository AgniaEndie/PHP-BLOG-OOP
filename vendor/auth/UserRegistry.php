<?php

class UserRegistry
{

    private $login,$password,$pass_check,$first_login,$ip,$email,$pass_hash;
    private $mysql;
    public  $register_message;

    public function registerUser($login,$password,$pass_check,$email){

        $this->login = $login;
        $this->password=$password;
        $this->pass_check = $pass_check;
        $this->email= $email;
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->mysql = new Database();
        $this->first_login = date("d.m.y");


        if($this->password == $this->pass_check){
            $this->pass_hash = password_hash($this->password,PASSWORD_BCRYPT);
            $this->mysql->queryResult("INSERT INTO `users` (`name`,`password`,`avatar`,`status`,`admin`,`last_login`,`first_login`,`ip`,`email`) VALUES ('$this->login','$this->pass_hash','default_avatar','default_status','0',null,'$this->first_login','$this->ip','$this->email')");
            $this->register_message = true;
            return true;
        }
        else{
            return false;
        }

    }
}