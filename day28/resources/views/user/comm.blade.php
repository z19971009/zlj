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
            height:100px;
        }
        #btn{
            float: right;
        }
        .pagination li{
            float: left;
            list-style: none;
            text-decoration: none;
            line-height: 25px;
            text-align: center;
            margin-left:15px;
            width: 25px;
            height: 25px;
            border: 1px solid darkgrey;

        }
    </style>
    <script src="/js/jq.js"></script>
    <script>
        $(document).ready(function(){
            $("#add").click(function(){
                var title=$("#title").val();
                var coment=$("#coment").val();
                $.post("addsave",{coment:coment,title:title,_token:$('input[name="_token"]').val()},function(r){
                    console.log(r);
//                    if(r.error){
//                        alert("发布成功");
//                        window.location.reload()
//                    }else{
//                        alert("发布失败");
//                    }
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
        <span>{{$v->id}}楼</span><br>
        标题：<span>{{$v->title}}</span><br>
        留言：<span>{{$v->coment}}</span><br>
        <span>{{$v->create_time}}</span>
        <button value="{{$v->id}}" onclick="del(this);" id="btn">删除</button>
    </div>
@endforeach
<div class="pagination">
    {{$data->links()}}
</div>

</body>
</html>



