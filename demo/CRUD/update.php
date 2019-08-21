<?php
include_once '../DB/DBConnect.php';
include_once '../Student.php';
include_once '../DB/StudentDB.php';
$user = $_GET['user'];
$pass = $_GET['pass'];
$email = $_GET['email'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_GET['id'];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if($username != '' && $password != '' && $email != ''){
        $studentDB = new StudentDB();
        $studentDB->update($username, $password, $email, $id);
    }else{
        echo 'Bạn chưa nhập dữ liệu';
    }

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
    <input placeholder="username" name = "username" value = <?php echo $user?>><br>
    <input placeholder="password" name = "password" value = <?php echo $pass?>><br>
    <input placeholder="email" name = "email" value = <?php echo $email?>><br>
    <button type="submit">Update</button>

</form>
</body>
</html>
