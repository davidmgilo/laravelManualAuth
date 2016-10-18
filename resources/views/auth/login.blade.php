<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

<form action="/login" method="post">
    <div class="form-group">
        Usuari: <input type="text" name="user" id="">
    </div>
   <div class="form-group">
       Password: <input type="text" name="password" id="">
   </div>
    <div class="row">
        <input type="submit" value="Login" class="btn btn-primary">
    </div>
    
</form>

</body>
</html>