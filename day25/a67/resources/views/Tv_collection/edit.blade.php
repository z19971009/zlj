@extends('layouts/app')
@section('content')
    <div class="info">`
<form action="{{ url('tv_collection/editSave') }}" method="post">
    {{csrf_field()}}
    <table>
        <input type="hidden" name="id" value="{{$data->id}}">
        <tr>
            <td> 电视剧id:</td>
            <td><input type="text" name="tv_id" value="{{$data->tv_id}}"></td>
        </tr>
        <tr>
            <td> 电视剧集数:</td>
            <td><input type="text" name="collection_index" value="{{$data->collection_index}}"></td>
        </tr>
        <tr>
            <td> 剧情介绍简介:</td>
            <td><input type="text" name="collection_desc" value="{{$data->collection_desc}}"></td>
        </tr>
        <tr>
            <td>下载地址:</td>
            <td><input type="text" name="download_url" value="{{$data->download_url}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
<div>
@endsection
