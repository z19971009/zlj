@extends('layouts/app')
@section('content')
    <div class="info">
<form action="{{ url('area/editSave') }}" method="post">
    {{csrf_field()}}
    <table>
        <input type="hidden" name="id" value="{{$data->id}}">
        <tr>
            <td> 地区名称:</td>
            <td><input type="text" name="area_name" value="{{$data->area_name}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
<div>
@endsection
