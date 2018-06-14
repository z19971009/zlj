@extends('layouts/app')
@section('content')
    <div class="list">
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
        <a href="{{url('comment/add')}}">添加</a>
            <table border="1" cellpadding="0">
                <tr>
                    <td>评论</td>
                    <td>用户id</td>
                    <td>评论id</td>
                    <td>评论类型</td>
                    <td>回应id</td>
                    <td>用户评分</td>
                    <td>评论内容</td>
                    <td>am</td>
                    <td>pm</td>
                    <td>操作</td>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->user_id}}</td>
                        <td>{{$v->comment_id}}</td>
                        <td>{{$v->comment_type}}</td>
                        <td>{{$v->repay_id}}</td>
                        <td>{{$v->score}}</td>
                        <td>{{$v->content}}</td>
                        <td>{{$v->created_at}}</td>
                        <td>{{$v->updated_at}}</td>
                        <td>
                            <a href="{{url('comment/delete/'.$v['id'])}}">删除</a>
                            <a href="{{url('comment/edit/'.$v['id'])}}">修改</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </body>
        </html>
    </div>
@endsection