<?php
include_once 'DBConnect.php';
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
        foreach ($data as $item) {
            $student = new Student($item['id'], $item['username'], $item['password'], $item['email']);
            array_push($arr, $student);
        }
        return $arr;
    }

    public function create($username, $password, $email)
    {
        $sql = "INSERT INTO Student(`username`,`password`,`email`) VALUES ('$username','$password','$email')";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
    }

    public function update($username, $password, $email, $id)
    {
        $sql = "UPDATE `Student` SET `username`='$username', `password`='$password', `email`='$email' WHERE id = '$id'";
        $mysql = $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `Student` WHERE id = '$id'";
        $mysql = $this->conn->query($sql);
    }

    public function checkUsername($username)
    {
        $sql = "SELECT * FROM Student WHERE `username`='$username'";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
        $result = $mysql->rowCount();
        return $result;
    }

    public function checkPassword($password)
    {
        $sql = "SELECT * FROM Student WHERE `password`='$password'";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
        $result = $mysql->rowCount();
        return $result;
    }

    public function checkUsernamePassword($username, $password)
    {
        $sql = "SELECT * FROM Student WHERE `username`='$username'AND `password`='$password'";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
        $result = $mysql->rowCount();
        return $result;
    }

    public function checkEmail($email)
    {
        $sql = "SELECT * FROM Student WHERE `email`='$email'";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
        $result = $mysql->rowCount();
        return $result;
    }

    public function selectUser($username)
    {
        $sql = "SELECT * FROM Student WHERE `username`='$username'";
        $mysql = $this->conn->prepare($sql);
        $mysql->execute();
        $data = $mysql->fetchAll();
        $arr = [];
        foreach ($data as $item) {
            $student = new Student($item['id'], $item['username'], $item['password'], $item['email']);
            array_push($arr, $student);
        }
        return $arr;
    }

}