<?php
include_once 'function.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $user = [
        'username' => $username,
        'pass' => $pass
    ];

    $file = 'data.json';

    if (!empty($username) && !empty($pass)) {
        saveFile($user, $file);

    }
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $delete = $_GET['deleteUsername'];
    $file = 'data.json';
    $arr = json_decode(file_get_contents($file), true);
    if (!empty($delete)){
        delete(find($delete, $file),$arr, $file);
    }
}