<?php
include_once 'DBConnect.php';
include_once 'index.php';
include_once '../Student.php';
class StudentDB
{
    public $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Student";
        $mysql = $this->conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $data = $mysql->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $student = new Student($item['id'], $item['name']);
            array_push($arr, $student);
        }
        return $arr;
    }

    public function create($name)
    {
        $sql = "INSERT INTO Student(`name`) VALUES ('$name')";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
    }

    public function update($name, $id)
    {
        $sql = "UPDATE `Student` SET `name`='$name' WHERE id = '$id'";
        $mysql = $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `Student` WHERE id = '$id'";
        $mysql = $this->conn->query($sql);
    }


}