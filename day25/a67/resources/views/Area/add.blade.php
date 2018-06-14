@extends('layouts/app')
@section('content')
     <div class="info">
        <form action="{{ url('area/addSave') }}" method="post">
            {{csrf_field()}}
            <table>
                <tr>
                    <td> 地区名称:</td>
                    <td><input type="text" name="area_name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="添加"></td>
                </tr>
            </table>
        </form>
    <div>
@endsection