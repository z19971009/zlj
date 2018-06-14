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
        <form action="{{url('novel_chapter/edit')}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="id" value="{{$data->id}}">
            小说id: <input type="text" name="novel_id" value="{{$data->novel_id}}"><br><br>
            章节数: <input type="text" name="chapter_num" value="{{$data->chapter_num}}"><br><br>
            章节标题: <input type="text" name="charpter_title" value="{{$data->charpter_title}}"><br><br>
            小说章节内容 : <textarea name="novel_content" id="" cols="30" rows="10" value="{{$data->novel_content}}"></textarea><br><br>
            <input type="submit" value="修改">
        </form>
        </body>
        </html>
    </div>
@endsection