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
        <form action="{{url('novel_chapter/add')}}" method="post">
                {{ csrf_field()}}
            小说id: <input type="text" name="novel_id"><br><br>
            章节数: <input type="text" name="chapter_num"><br><br>
            章节标题: <input type="text" name="charpter_title"><br><br>
            小说章节内容 : <textarea name="novel_content" id="" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="添加">
        </form>
        </body>
        </html>
    </div>
@endsection