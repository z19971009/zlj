<?php


?>

@extends('layouts.app')

@section('content')
    <div class="info">
    @if(isset($data['id']))
        <form action="{{ url('film/edit') }}" method="post" enctype="multipart/form-data">
    @else
        <form action="{{ url('film/add') }}" method="post" enctype="multipart/form-data">
    @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}}">
            @if(isset($data['id']))
                <input type="hidden" name="id" value="{{$data['id']}}">
            @endif

            电影名:<input type="text" name="title" value="{{ isset($data['title']) ? $data['title'] : '' }}"><br><br>
            图片地址:<input type="file" name="img_url"><br><br>
            下载地址:<input type="text" name="download_url" value="{{ isset($data['download_url']) ? $data['download_url'] : '' }}"><br><br>
            用户评分:<input type="text" name="score" value="{{ isset($data['score']) ? $data['score'] : '' }}"><br><br>
            语言:<input type="text" name="lanaguage_type" value="{{ isset($data['lanaguage_type']) ? $data['lanaguage_type'] : '' }}"><br><br>
            地区:<select name="area_id" id="">
                @foreach($area as $v)
                    <option value="{{ $v->id }}">{{$v->area_name}}</option>
                @endforeach
            </select><br><br>
            类型:<select name="type_id" id="">
                @foreach($area as $v)
                    <option value="{{ $v->id }}">{{$v->type}}</option>
                @endforeach
            </select><br><br>
            {{--类型:<input type="text" name="type_id" value="{{ isset($data['type_id']) ? $data['type_id'] : '' }}"><br><br>--}}
            年代:<select name="year_id" id="">
                @foreach($years as $v)
                    <option value="{{ $v->id }}">{{$v->years}}</option>
                @endforeach
            </select><br><br>
            {{--年代:<input type="text" name="year_id" value="{{ isset($data['year_id']) ? $data['year_id'] : '' }}"><br><br>--}}
            导演:<select name="director_id" id="">
                @foreach($director as $v)
                    <option value="{{ $v->id }}">{{$v->name}}</option>
                @endforeach
            </select><br><br>
            {{--导演:<input type="text" name="director_id" value="{{ isset($data['director_id']) ? $data['director_id'] : '' }}"><br><br>--}}
            演员:<select name="actor_id" id="">
                @foreach($actor as $v)
                    <option value="{{ $v->id }}">{{$v->actor_name}}</option>
                @endforeach
            </select><br><br>

            电影简介:<input type="text" name="desc" value="{{ isset($data['desc']) ? $data['desc'] : '' }}"><br><br>

            <input type="submit" value="提交">
        </form>
        <a href="{{ url('film/index') }}">返回</a>
     </div>
@endsection