<?php
include_once 'DB/DBConnect.php';
include_once 'DB/StudentDB.php';
//include_once 'Student.php';

$studentDB = new StudentDB();
//$allStudent = $students->getAll();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
//    if ($students->checkUsername($username) == 1 && $students->checkPassword($password) > 0) {
//        $obj = $students->selectUser($username);
//        foreach ($obj as $item) {
//            if ($username == $item->getName() && $password == $item->getPassword()) {
//                if ($username == 'admin') {
//                    header("location: CRUD/admin.php");
//                } else {
//                    header("location: CRUD/user.php?username=$username");
//                }
//            } else {
//                echo "username hoặc password không đúng";
//            }
//        }
//    }

    if ($studentDB->checkUsernamePassword($username, $password)) {
        if ($username == 'admin') {
            header("location: CRUD/admin.php");
        } else {
            header("location: CRUD/user.php?username=$username");
        }
    } else {
        echo "username hoặc password không đúng";
    }

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
    <input placeholder="username" name="username"><br>
    <input placeholder="password" name="password"><br>

    <button>Login</button>
    <br>
</form>
<a href="CRUD/create.php">Register</a>

</body>
</html>