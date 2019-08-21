<?php
include_once '../DB/DBConnect.php';
include_once '../DB/StudentDB.php';
include_once '../Student.php';

$students = new StudentDB();
$allStudent = $students->getAll();

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
<table border = 4px; cellspacing="0" cellpadding="5">
    <tr>
        <td>
            STT
        </td>
        <td>
            Tên
        </td>
        <td>
            Mật khẩu
        </td>
        <td>
            Địa chỉ email
        </td>
    </tr>
    <?php foreach ($allStudent as $key=>$students): ?>
        <tr>
            <td>
                <?php echo ++$key?>
            </td>
            <td>
                <?php echo $students->getName()?>
            </td>
            <td>
                <?php echo $students->getPassword()?>
            </td>
            <td>
                <?php echo $students->getEmail()?>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $students->getId(); ?>">Delete</a>
            </td>
            <td>
                <a href="update.php?id=<?php echo $students->getId(); ?>">Update</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
