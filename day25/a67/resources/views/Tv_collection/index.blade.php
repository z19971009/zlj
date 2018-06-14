<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:53
 */
?>
@extends('layouts/app')
@section('content')
    <div class="list">
<a href="{{ url('tv_collection/add') }}">添加</a>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>电视剧剧集</td>
        <td>电视剧id</td>
        <td>电视剧集数</td>
        <td>剧情介绍简介</td>
        <td>下载地址</td>
        <td>am</td>
        <td>pm</td>
        <td>操作</td>
    </tr>
    @foreach($list as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->tv_id}}</td>
            <td>{{$v->collection_index}}</td>
            <td>{{$v->collection_desc}}</td>
            <td>{{$v->download_url}}</td>
            <td>{{$v->created_at}}</td>
            <td>{{$v->updated_at}}</td>
            <td><a href="{{ url('tv_collection/edit/'.$v->id) }}">修改</a>
                <a href={{ url('tv_collection/delete/'.$v->id) }}">删除</a>
            </td>
        </tr>
    @endforeach
</table>
<div>
@endsection