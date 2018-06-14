@extends('layouts/app')
@section('content')
    <div class="info">`
<form action="{{ url('tv_collection/addSave') }}" method="post">
    {{csrf_field()}}
    <table>
        <tr>
            <td> 电视剧id:</td>
            <td><input type="text" name="tv_id"></td>
        </tr>
        <tr>
            <td> 电视剧集数:</td>
            <td><input type="text" name="collection_index"></td>
        </tr>
        <tr>
            <td> 剧情介绍简介:</td>
            <td><input type="text" name="collection_desc"></td>
        </tr>
        <tr>
            <td>下载地址:</td>
            <td><input type="text" name="download_url"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>
<div>
@endsection