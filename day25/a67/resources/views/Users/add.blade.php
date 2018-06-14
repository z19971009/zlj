@extends('layouts/app')

@section('content')
    <div class="info">
        @if(isset($data['id']))
            <form action="{{ url('user/edit') }}" method="post">
        @else
            <form action="{{ url('user/add') }}" method="post">
        @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}}">
            @if(isset($data['id']))
                <input type="hidden" name="id" value="{{$data['id']}}">
            @endif
            用户:<input type="text" name="name" value="{{ isset($data['name']) ? $data['name'] : '' }}"><br><br>
            邮箱:<input type="text" name="email" value="{{ isset($data['email']) ? $data['email'] : '' }}"><br><br>
            密码:<input type="text" name="password" value="{{ isset($data['password']) ? $data['password'] : '' }}"><br><br>
            token:<input type="text" name="remember_token" value="{{ isset($data['remember_token']) ? $data['remember_token'] : '' }}"><br><br>
            <input type="submit" value="提交">
        </form>
        <a href="{{ url('user/index') }}">返回</a>
    </div>
@endsection
