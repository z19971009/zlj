@extends('layouts.app')
{{--模板套用--}}
    @section('content')
        <div class="info">
            @if(isset($data['id']))
                <form action="{{ url('novel/edit') }}" method="post">
                    @else
                        <form action="{{ url('novel/add') }}" method="post">
                            @endif

                            <input type="hidden" name="_token" value="{{ csrf_token() }}}">

                            @if(isset($data['id']))
                                <input type="hidden" name="id" value="{{$data['id']}}">
                     @endif

                    小说名称:<input type="text" name="title" value="{{ isset($data['title']) ? $data['title'] : '' }}"><br><br>
                    评分:<input type="text" name="score" value="{{ isset($data['score']) ? $data['score'] : '' }}"><br><br>
                    图片地址:<input type="file" name="img_url" value="{{ isset($data['img_url']) ? $data['img_url'] : '' }}"><br><br>
                    下载地址:<input type="text" name="download_url" value="{{ isset($data['download_url']) ? $data['download_url'] : '' }}"><br><br>
                    作者id:<input type="text" name="author_id" value="{{ isset($data['author_id']) ? $data['author_id'] : '' }}"><br><br>
                    状态:<input type="radio" name="status" value="1" checked>连载
                         <input type="radio" name="status" value="2">停更
                         <input type="radio" name="status" value="3">完结
                         <input type="radio" name="status" value="4">封杀<br><br>
                     类型:<select name="type_id" id="">
                               @foreach($type as $v)
                                    <option value="{{$v->type}}">{{$v->name}}</option>
                               @endforeach
                           </select><br><br>
                    {{--类型:<input type="text" name="type_id" value="{{ isset($data['type_id']) ? $data['type_id'] : '' }}"><br><br>--}}
                    内容简介:<input type="text" name="desc" value="{{ isset($data['desc']) ? $data['desc'] : '' }}"><br><br>

                    <input type="submit" value="提交">
                </form>
            <a href="{{ url('novel/index') }}">返回</a>
        </div>
    @endsection