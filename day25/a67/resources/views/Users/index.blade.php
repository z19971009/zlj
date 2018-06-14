@extends('layouts/app')

@section('content')
    <div class="list">
        <a href="{{url('user/add')}}" style="display: block;margin-left: 48%;">添加用户</a>
        <table border="1" cellspacing="0" style="text-align: center;margin: 0 auto">
            <tr>
                <td>id</td>
                <td>用户名</td>
                <td>邮箱</td>
                <td>密码</td>
                <td>token</td>
                <td>创建时间</td>
                <td>修改时间</td>
                <td>操作</td>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v['id'] }}</td>
                    <td>{{ $v['name'] }}</td>
                    <td>{{ $v['email'] }}</td>
                    <td>{{ $v['password'] }}</td>
                    <td>{{ $v['remember_token'] }}</td>
                    <td>{{ $v['created_at'] }}</td>
                    <td>{{ $v['updated_at'] }}</td>
                    <td>
                        <a href="{{ url('user/edit/'.$v['id']) }}">修改</a>
                        <a href="{{ url('user/delete/'.$v['id']) }}">删除</a>
                    </td>
                </tr>
             @endforeach
        </table>
    </div>
@endsection

