<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">

        @csrf

        Tài khoản: <input type="text" name="taikhoan"><br>
        Mật khẩu: <input type="password" name="matkhau"><br>
        <button type="submit">Gửi</button>

    </form>

    
</body>
</html>