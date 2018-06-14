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
        <form action="{{url('years/edit')}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="id" value="{{$data->id}}">
            年份: <input type="text" name="years" value="{{$data->years}}"><br><br>
            <input type="submit" value="添加">
        </form>
        </body>
        </html>
    </div>
@endsection