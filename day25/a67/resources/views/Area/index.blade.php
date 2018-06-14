@extends('layouts/app')
@section('content')
    <div class="list">
        <a href="{{ url('area/add') }}">添加</a>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>地区表</td>
                <td>地区名称</td>
                <td>am</td>
                <td>pm</td>
                <td>操作</td>
            </tr>
            @foreach($list as $v)
                <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->area_name}}</td>
                    <td>{{$v->created_at}}</td>
                    <td>{{$v->updated_at}}</td>
                    <td><a href="edit/{{$v->id}}">修改</a>
                        <a href="delete/{{$v->id}}">删除</a>
                    </td>
                </tr>
            @endforeach
        </table>
    <div>
@endsection