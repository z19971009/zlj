<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/9
 * Time: 15:38
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .head{
            width: 200px;
            height: 40px;
            border: 1px solid darkgrey;
        }
        .dix{
            margin-top:20px;
            border:1px solid grey;
            width: 1000px;
            height: 60px;
        }
        #btn{
            float: right;
            margin-bottom: 10px;
            margin-top: -40px;
        }
        .fenye li{
            list-style: none;
            float: left;
            margin: 0 10px;
        }
    </style>
    <script src="/js/jq.js"></script>
    <script>
        $(document).ready(function(){
            $("#add").click(function(){
                var title=$("#title").val();
                if(title == ""){
                    alert('标题不能为空');
                    return false;
                }
                var coment=$("#coment").val();
                if(coment == ""){
                    alert('留言不能为空');
                    return false;
                }
                $.post("addsave",{coment:coment,title:title,_token:$('input[name="_token"]').val()},function(r){
                    if(r.error === 0){
                        alert('添加成功');
                        window.location.href = '/comm';
                    }else{
                        alert(r.data);
                    }
                },"json")
            });


        })

        function del(del) {
            $.post('delete',{id:(del.value),_token:$('input[name="_token"]').val()},function(r){
                if(r.error === 0){
                    $(del).parent().remove();
                }
            },'json');
        }
    </script>
</head>
<body>
<form action="/addsave" method="post" onsubmit="return false">
    {{csrf_field()}}
    标题：<input type="text" name="title" id="title">
    <br><br>
    留言: <textarea name="coment" id="coment" cols="30" rows="10"></textarea>
    <br><br>
    <input type="button" value="发布" id="add">
</form>


@foreach ($data as $v)
    <div class="dix">
        <span>标题:{{$v->title}}</span><br>
        <span>内容:{{$v->coment}}</span><br>
        <span>发布时间:{{ date('Y-m-d H:i:s',$v->create_time) }}</span>
        <button value="{{$v->id}}" onclick="del(this);" id="btn">删除</button>
    </div>
@endforeach
    <div class="fenye">
        {{$data->links()}}
    </div>
</body>
</html>



