@extends('layouts/app')

@section('content')
<div class="info">
    <form action="{{ url('actor/editSave') }}" method="post">
        {{csrf_field()}}
        <table>
            <input type="hidden" name="id" value="{{$data->id}}">
            <tr>
                <td> 演员名称:</td>
                <td><input type="text" name="actor_name" value="{{$data->actor_name}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="修改"></td>
            </tr>
        </table>
    </form>
</div>
@endsection