<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/9
 * Time: 10:48
 */
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
<a href="check">扥</a>
    <form action="check
" method="post">
        <input type="hidden" name="_token" value="{{CSRF_token()}}}">
        姓名:<input type="text" name="username"><br><br>
        密码:<input type="text" name="pwd"><br><br>
             <input type="submit" value="登录">

    </form>
</body>
</html>


