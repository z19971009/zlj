@extends('layouts/app')

@section('content')
    <div class="info">
        @if(isset($data['id']))
            <form action="{{ url('type/edit') }}" method="post">
        @else
            <form action="{{ url('type/add') }}" method="post">
        @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}}">
            @if(isset($data['id']))
                <input type="hidden" name="id" value="{{$data['id']}}">
            @endif
            类型:<input type="text" name="type" value="{{ isset($data['type']) ? $data['type'] : '' }}"><br><br>
            类型名称:<input type="text" name="name" value="{{ isset($data['name']) ? $data['name'] : '' }}"><br><br>
            <input type="submit" value="提交">
        </form>
        <a href="{{ url('type/index') }}">返回</a>
    </div>
@endsection
