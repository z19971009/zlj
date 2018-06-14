@extends('layouts/app')
@section('content')
<div class="list">`
<a href="{{ url('actor/add') }}">添加</a>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>演员表</td>
        <td>演员名称</td>
        <td>am</td>
        <td>pm</td>
        <td>操作</td>
    </tr>
    @foreach($list as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->actor_name}}</td>
            <td>{{$v->created_at}}</td>
            <td>{{$v->updated_at}}</td>
            <td><a href="{{ url('actor/edit/'.$v->id) }}">修改</a>
                <a href="{{ url('actor/delete/'.$v->id) }}">删除</a>
            </td>
        </tr>
    @endforeach
</table>
<div>
@endsection