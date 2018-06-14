@extends('layouts.app')

@section('content')
    <div class="list">
        <a href="{{url('novel/add')}}" style="display: block;margin-left: 48%;">添加小说</a>
        <table border="1" cellspacing="0" style="text-align: center;margin: 0 auto">
            <tr>
                <td>id</td>
                <td>小说名称</td>
                <td>评分</td>
                <td>图片地址</td>
                <td>下载地址</td>
                <td>作者id</td>
                <td>状态</td>
                <td>类型</td>
                <td>内容简介</td>
                <td>创建时间</td>
                <td>修改时间</td>
                <td>操作</td>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v['id'] }}</td>
                    <td>{{ $v['title'] }}</td>
                    <td>{{ $v['score'] }}</td>
                    <td><img src="{{ $v['img_url'] }}" alt="" width="100px" height="100px"></td>
                    <td>{{ $v['download_url'] }}</td>
                    <td>{{ $v['author_id'] }}</td>
                    <td>{{ $v['status_text'] }}</td>
                    <td>{{ $v['type'] }}</td>
                    <td>{{ $v['desc'] }}</td>
                    <td>{{ $v['created_at'] }}</td>
                    <td>{{ $v['updated_at'] }}</td>

                    <td>
                        <a href="{{ url('novel/edit/'.$v['id']) }}">修改</a>
                        <a href="{{ url('novel/delete/'.$v['id']) }}">删除</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


