<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/9
 * Time: 12:42
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('user/index');
    }

    public function check(){


        if($_POST['username']==null || $_POST['pwd']==null){
            return '用户名和密码不能为空';
        }else{
            $username=DB::table('user')->where('username',$_POST['username'])->first();
            if($username && $username->pwd==md5($_POST['pwd'])){
                $_SESSION['user']=$username;
                return redirect('comm');
//                $this->comm();
            }else{
                return '用户或密码错误';
            }
        }

    }
//    public function validateform(Request $request){
//       // print_r($request->all());
//        $this->validate($request,[
//            'username'=>'required|max:8',
//            'pwd'=>'required'
//        ]);
//    }

}