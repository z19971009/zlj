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
    <form action="login" method="post">
        {{csrf_field()}}
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td> 账号：</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td> 密码：</td>
                <td><input type="text" name="pwd"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="登录"></td>
            </tr>
        </table>
    </form>
</body>
</html>


