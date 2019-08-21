<?php
include_once '../DB/DBConnect.php';
include_once '../Student.php';
include_once '../DB/StudentDB.php';

$id = $_GET['id'];
$studentDB = new StudentDB();
$studentDB->delete($id);
header('location: admin.php', true);
