<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/10
 * Time: 20:13
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class MessController extends Controller
{
    public function comm(){
        // echo 123;
        $data=DB::table('mess')->paginate(2);
        return view('user/comm',['data'=>$data]);

    }
public function addsave(){
        unset($_POST['_token']);
        $title=$_POST['title'];
        $coment=$_POST['coment'];
       // $_POST['create_time']=time();
        $rs=DB::table('mess')->insert(['title'=>$title,'coment'=>$coment,'create_time'=>time(),'update_time'=>time()]);
//        if($rs){
//            return '发布成功';
//        }else{
//            return '发布失败';
//        if($add){
//            return response()->json([
//                'error' => 0
//            ]);
//        }else{
//            return response()->json([
//                'error' => 1,
//                'data' => '删除失败'
//            ]);
//        }
//        }
//
    }
    public function delete(Request $request){
        $del=DB::table('mess')->where(['id'=>Request::input('id')])->delete();
        if($del){
            return response()->json([
                'error' => 0
            ]);
        }else{
            return response()->json([
                'error' => 1,
                'data' => '删除失败'
            ]);
        }
    }
}