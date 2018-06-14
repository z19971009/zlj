@extends('layouts.app')
@section('content')
    <div class="list">
        <form action="{{url('film/index')}}" method="post">
            {{csrf_field()}}
           搜索：<input type="text" name="res">
            <input type="submit" value="搜索">
        </form>
    <a href="{{url('film/add')}}" style="display: block;margin-left: 48%;">添加电影</a>
    <table border="1" cellspacing="0" style="text-align: center;margin: 0 auto">
        <tr>
            <td>id</td>
            <td>电影名</td>
            <td>图片地址</td>
            <td>下载地址</td>
            <td>用户评分</td>
            <td>语言</td>
            <td>地区</td>
            <td>类型</td>
            <td>年代</td>
            <td>导演</td>
            <td>演员</td>
            <td>电影简介</td>
            <td>创建时间</td>
            <td>修改时间</td>
            <td>操作</td>
        </tr>
        @foreach($data as $v)
            <tr>
                <td>{{ $v['id'] }}</td>
                <td>{{ $v['title'] }}</td>
                <td><img src="{{ $v['img_url'] }}" width="30px" ></td>
                <td>{{ $v['download_url'] }}</td>
                <td>{{ $v['score'] }}</td>
                <td>{{ $v['lanaguage_type'] }}</td>
                <td>{{ $v['area'] }}</td>
                <td>{{ $v['type'] }}</td>
                <td>{{ $v['year'] }}</td>
                <td>{{ $v['director'] }}</td>
                <td>{{ $v['actor'] }}</td>
                <td>{{ $v['descs'] }}</td>
                <td>{{ $v['created_at'] }}</td>
                <td>{{ $v['updated_at'] }}</td>

                <td>
                    <a href="{{ url('film/edit/'.$v['id']) }}">修改</a>
                    <a href="{{ url('film/delete/'.$v['id']) }}">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

    <div>
        {{$data->links()}}
    </div>
@endsection


