<?php
include_once 'DBConnect.php';
include_once 'DBStudent.php';

$student = new DBStudent();
print_r($student->getAll());