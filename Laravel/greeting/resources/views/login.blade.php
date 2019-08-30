<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="/login" method="POST">
        @csrf
        <p>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </p>
        <p>
            <input type="text" name="password" placeholder="Mật khẩu">
        </p>
        <p>
            <button type="submit">Đăng nhập</button>
        </p>    
        
    </form>
</body>
</html>
