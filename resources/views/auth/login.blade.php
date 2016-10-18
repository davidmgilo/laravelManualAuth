<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="    {{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/login" method="post">

    Usuari: <input type="text" name="user" id="">
    Password: <input type="text" name="password" id="">
    <input type="submit" value="Login">
</form>

</body>
</html>