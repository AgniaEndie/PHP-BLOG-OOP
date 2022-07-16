<?php

class Database {

    protected $host;
    protected $userName;
    protected $password;
    protected $dbName;
    private $cfg;

    public function __construct () {
        $this->cfg = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/Config.ini', true);
        $this->host = $this->cfg['host'];
        $this->username = $this->cfg['user'];
        $this->password = $this->cfg['pass'];
        $this->dbName = $this->cfg['base'];
    }

    public function queryResult($query){
        $mysqli = new mysqli($this->host,$this->userName,$this->password,$this->dbName);
        $result = $mysqli->$query;
        if($result == null){
            //return $mysqli->errno;
            return "Mysql Error Or Query is null";
            //$mysqli->errno;
        }
        else{
            return $result;
        }
    }


}








