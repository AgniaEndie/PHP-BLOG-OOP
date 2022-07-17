<?php
class UserAuth{
    private $login,$password,$email,$last_login;
    private $mysql;
    protected $pass_db,$result,$result_array;
    public $auth_message;



    public function authUser($login,$password){
        $this->login = $login;
        $this->password=$password;
        $this->last_login = date("d.m.y");
        $this->mysql = new Database();
        $this->result = $this->mysql->queryResult("SELECT * FROM `users` where `name` = '$this->login' order by `id` desc limit 1" );
        $this->result_array = $this->result->fetch_array();
        $this->pass_db = $this->result_array[2];
        if(password_verify($this->password,$this->pass_db)){
            $this->auth_message = true;
            return true;
        }else{
            //return false;
            throw new Exception("User Not found");
            //return false;
        }


    }
}
?>