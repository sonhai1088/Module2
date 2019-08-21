<?php
include_once '../DB/DBConnect.php';
include_once '../Student.php';
include_once '../DB/StudentDB.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    if($username != ''){
        $studentDB = new StudentDB();
        $studentDB->create($username);
    }else{
        echo 'Bạn chưa nhập dữ liệu';
    }
    header("location: ../index.php");
}
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
    <input placeholder="Write" name = "username">
    <button type="submit">create</button>

</form>
</body>
</html>
