@extends('layouts/app')
@section('content')
    <div class="info">
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
<form action="{{url('comment/add')}}" method="post">
    {{ csrf_field()}}
    用户id: <input type="text" name="user_id"><br><br>
    评论id: <input type="text" name="comment_id"><br><br>
    评论类型: <input type="radio" name="comment_type" value="1">
              <input type="radio" name="comment_type" value="2"><br><br>
    回应id: <input type="text" name="repay_id"><br><br>
    用户评分: <input type="text" name="score"><br><br>
    评论内容: <input type="text" name="content"><br><br>
    <input type="submit" value="添加">
</form>
</body>
</html>
</div>
@endsection