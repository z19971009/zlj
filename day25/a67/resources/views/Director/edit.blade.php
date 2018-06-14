@extends('layouts/app')
@section('content')
    <div class="info">`
<form action="{{ url('director/editSave') }}" method="post">
    {{csrf_field()}}
    <table>
        <input type="hidden" name="id" value="{{$data->id}}">
        <tr>
            <td> 导演名称:</td>
            <td><input type="text" name="name" value="{{$data->name}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
        <div>
@endsection
