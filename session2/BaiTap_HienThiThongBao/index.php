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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="firstNumber"/>x<br>
    <select name="action">
        <option value="+">Cong</option>
        <option value="-">Tru</option>
        <option value="*">Nhan</option>
        <option value="/">Chia</option>
    </select><br>
    <input type="text" name="secondNumber"/>y<br>
    <input type="submit" id="submit" value="Calculator"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["firstNumber"];
    $y = $_POST["secondNumber"];
    $action = $_POST["action"];

    if ($y == 0) {
        echo "Xảy ra ngoại lệ";
    } else if ($x==0 && $y == 0) {
        echo "Xảy ra ngoại lệ";
    } else {
        switch ($action) {
            case "+":
                $result = $x + $y;
                break;
            case "-":
                $result = $x - $y;
                break;
            case "*":
                $result = $x * $y;
                break;
            case "/":
                $result = $x / $y;
                break;
        }
        echo $x . $action . $y . "=" . $result;
    }
}
?>
</body>
</html>
