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
    <input type="text" name="firstNumber"/>First operand<br>
    <select name="action">
        <option value="+">Cong</option>
        <option value="-">Tru</option>
        <option value="*">Nhan</option>
        <option value="/">Chia</option>
    </select><br>
    <input type="text" name="secondNumber"/>Second operand<br>
    <input type="submit" id="submit" value="Calculator"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];
    $action = $_POST["action"];
    switch ($action) {
        case "+":
            $result = $firstNumber + $secondNumber;
            break;
        case "-":
            $result = $firstNumber - $secondNumber;
            break;
        case "*":
            $result = $firstNumber * $secondNumber;
            break;
        case "/":
            $result = $firstNumber / $secondNumber;
            break;
    }
    echo $firstNumber . $action . $secondNumber . "=" . $result;
}
?>
</body>
</html>
