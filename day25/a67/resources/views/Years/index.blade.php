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
        <a href="{{url('years/add')}}">添加</a>
            <table border="1" cellpadding="0">
                <tr>
                    <td>年份表</td>
                    <td>年份</td>
                    <td>am</td>
                    <td>pm</td>
                    <td>操作</td>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->years}}</td>
                        <td>{{$v->created_at}}</td>
                        <td>{{$v->updated_at}}</td>
                        <td>
                            <a href="{{url('years/delete/'.$v['id'])}}">删除</a>
                            <a href="{{url('years/edit/'.$v['id'])}}">修改</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </body>
        </html>
    </div>
@endsection