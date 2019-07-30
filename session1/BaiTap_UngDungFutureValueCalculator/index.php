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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name="money" placeholder="Money First"/><br>
    <input type="text" name="month" placeholder="Month"/><br>
    <input type="text" name="interestRate" placeholder="Interest rate"/>%<br>
    <input type = "submit" id = "submit" value = "Calculator"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["money"];
    $month = $_POST["month"];
    $rate = $_POST["interestRate"];
    $calculator = $money + ($money * $month * $rate/100);
    echo $calculator;
}
?>
</body>
</html>