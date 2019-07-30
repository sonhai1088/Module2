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
    <input type="text" name="productName"/>Product Name<br>
    <input type="text" name="listPrice"/>List Price<br>
    <input type="text" name="discount"/>Discount percent (%)<br>
    <input type = "submit" id = "submit" value = "Calculator Discount"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["productName"];
    $listPrice = $_POST["listPrice"];
    $discount = $_POST["discount"];
    $calculatorDiscount = $listPrice * $discount / 100;
    $newPrice = $listPrice - $calculatorDiscount;
    echo "Product Name: ".$productName."<br>"."Price: ".$listPrice."<br>"."Discount Percent: ".$discount."<br>"."Discount Amount: "."$calculatorDiscount"."<br>"."Discount Price: ".$newPrice;
}
?>
</body>
</html>