<?php

class Database {

    protected $host;
    protected $userName;
    protected $password;
    protected $dbName;
    private $cfg;

    public function __construct () {
        //$this->cfg = parse_ini_file('../../Config.ini', true);
        $this->cfg = parse_ini_file($_SERVER['DOCUMENT_ROOT'] .'/Config.ini');
        $this->host = $this->cfg['host'];
        $this->userName = $this->cfg['user'];
        $this->password = $this->cfg['pass'];
        $this->dbName = $this->cfg['base'];
    }

    public function queryResult($query){
        $mysqli = new mysqli($this->host,$this->userName,$this->password,$this->dbName);
        $result = $mysqli->query($query);//$query;
        if($result == null){
            //return $mysqli->errno;
            //return "Mysql Error Or Query is null";
            return $query;
            //$mysqli->errno;
        }
        else{
            return $result;
        }
    }


}








