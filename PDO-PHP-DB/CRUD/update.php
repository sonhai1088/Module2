<?php
include_once '../DB/DBConnect.php';
include_once '../Student.php';
include_once '../DB/StudentDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_GET['id'];
    $name = $_POST["username"];
    if($name != ''){
        $studentDB = new StudentDB();
        $studentDB->update($name, $id);
    }else{
        echo 'Bạn chưa nhập dữ liệu';
    }
    header("location: ../index.php");
}


//$studentDB = new StudentDB();
//$studentDB->update($id);
////header('location: ../index.php', true);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input placeholder="" name = "username">
    <button type="submit">Update</button>

</form>
</body>
</html>
