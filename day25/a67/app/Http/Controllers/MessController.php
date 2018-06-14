<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/10
 * Time: 20:13
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class MessController extends Controller
{
    public function comm(){
        $data=DB::table('mess')->paginate(2);
        return view('user/comm',['data'=>$data]);
    }

    public function addsave(Request $request){
        $bool=DB::table('mess')->insert(
            [
                'title'=>Request::input('title'),
                'coment'=>Request::input('coment'),
                'create_time'=>time(),
                'update_time'=>time()
            ]
        );
        if($bool){
            return response()->json([
                'error' => 0
            ]);
        }else{
            return response()->json([
                'error' => 1,
                'data' => '添加失败'
            ]);
        }

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