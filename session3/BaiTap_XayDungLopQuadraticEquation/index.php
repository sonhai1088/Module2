<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<form name = 'QuadraticEquation' method="post">
    <h3>ax^2 + bx + c = 0</h3>
    <input type="number" name = 'inputA' placeholder="Input a">
    <input type="number" name = 'inputB' placeholder="Input b">
    <input type="number" name = 'inputC' placeholder="Input c">
    <input type="submit" id="submit" value="Result"/>

</form>

<body>
<?php
include 'QuadraticEquation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['inputA'];
    $b = $_POST['inputB'];
    $c = $_POST['inputC'];
    $x1x2 = -$b/(2*$a);

    $quadraticEquation = new QuadraticEquation($a,$b,$c);
    $delta = $quadraticEquation->getDiscriminant();
    if ($delta > 0) {
        echo 'x1 = '.$quadraticEquation->getRoot1().' and '.'x2 = '.$quadraticEquation->getRoot2();
    } else if ($delta = 0){
        echo 'x1 = x2 = '.$x1x2;
    } else{
        echo 'The equation has no roots';
    }
}

?>
</body>
</html>