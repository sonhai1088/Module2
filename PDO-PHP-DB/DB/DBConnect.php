<?php


class DBConnect
{
    public $username ;
    public $password;
    public $dsn;
    public function __construct()
    {
        $this->username = 'root';
        $this->password = '1088';
        $this->dsn = "mysql:host=localhost;dbname=students_database";
    }

    public function  connect (){
        $conn = null;
        try{
            $conn = new PDO($this->dsn, $this->username, $this->password);
        }catch (PDOException $exception){
            return $exception ->getMessage();
        }
        return $conn;
    }
}