@extends('layouts/app')

@section('content')
    <div class="list">
        <a href="{{url('type/add')}}" style="display: block;margin-left: 48%;">添加类型</a>
        <div class="list">
            <table border="1" cellspacing="0" style="text-align: center;margin: 0 auto">
                <tr>
                    <td>id</td>
                    <td>类型</td>
                    <td>类型名称</td>
                    <td>创建时间</td>
                    <td>修改时间</td>
                    <td>操作</td>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td>{{ $v['id'] }}</td>
                        <td>{{ $v['type'] }}</td>
                        <td>{{ $v['name'] }}</td>
                        <td>{{ $v['created_at'] }}</td>
                        <td>{{ $v['updated_at'] }}</td>
                        <td>
                            <a href="{{ url('type/edit/'.$v['id']) }}">修改</a>
                            <a href="{{ url('type/delete/'.$v['id']) }}">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

@endsection

