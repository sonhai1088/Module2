<?php
class Student{
    public $id;
    public $username;
    public $password;
    public $email;
    public function __construct($id, $username, $password, $email)
    {
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
}