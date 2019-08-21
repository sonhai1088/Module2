<?php

class DBStudent
{
    public $conn;
    public function __construct()
    {
        $db = new DBconnect();
        $this->conn = $db->connect();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM `Student`";
        $mysql = $this -> conn -> query($sql);

        $data = $mysql -> fetchAll();
        return $data;
    }
}
