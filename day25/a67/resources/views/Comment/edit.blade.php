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
<form action="{{url('comment/edit')}}" method="post">
    {{ csrf_field()}}
    <input type="hidden" name="id" value="{{$data->id}}">
    用户id: <input type="text" name="user_id" value="{{$data->user_id}}"><br><br>
    评论id: <input type="text" name="comment_id" value="{{$data->comment_id}}"><br><br>
    评论类型: <input type="text" name="comment_type" value="{{$data->comment_type}}"><br><br>
    回应id: <input type="text" name="repay_id" value="{{$data->repay_id}}"><br><br>
    用户评分: <input type="text" name="score" value="{{$data->score}}"><br><br>
    评论内容: <input type="text" name="content" value="{{$data->content}}"><br><br>
    <input type="submit" value="修改">
</form>
</body>
</html>
</div>
@endsection