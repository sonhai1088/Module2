<?php
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
<table>
    {{var_dump($student)}}
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    @foreach($student as $key => $item)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
