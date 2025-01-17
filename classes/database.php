<?php

class Database {
    private $serverName = "localhost";
    private $username = "root";
    private $password = ""; 
    private $dbName = "portfolio_kred";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->serverName,$this->username, $this->password,$this->dbName);

        if($this->conn->connect_error){
            die("Unable to connect to database " .$this->dbName. ": " .$this->conn->connect_error);
        }

        return $this->conn;
    }
}

?>