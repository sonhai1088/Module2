<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>

</head>

<body>
<form method="post" action="add.php">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="text" name="pass" placeholder="Password"><br>
    <button type="submit"> Send Info</button>
    <br>
</form>
<form method="get">
    <input type="text" name="deleteUsername" placeholder="Delete Username"><br>
    <button type="submit"> Delete</button>
</form>
</body>
</html>
