<?php
session_start();

class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database_name = 'sweets_db';
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database_name);

        if($this->conn == TRUE){
            return $this->conn;
        }else{
            return FALSE;
        }
        
    }
}
?>