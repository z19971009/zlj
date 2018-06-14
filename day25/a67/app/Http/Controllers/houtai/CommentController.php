<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 17:18
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $data=Comment::all();
        return view('comment/index',['data'=>$data]) ;
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('comment/add');
        }else if($request->isMethod('POST')){
            unset($_POST['_token']);
            $arr=Comment::create($request->input());
            if($arr){
                return redirect('comment/index');
            }else{
                return redirect('comment/add');
            }
        }
    }

    public function edit(Request $request,$id=null){
        if($request->isMethod('GET')){
            $data=Comment::find($id);
            return view('comment/edit',['data'=>$data]);
        }else{
            $data=Comment::find($request->input('id'))->update($request->input());
            if($data){
                return redirect('comment/index');
            }else{
                return redirect('comment/edit');
            }
        }
    }

    public function delete($id){
        $data=Comment::find($id)->delete();
        if($data){
            return redirect('comment/index');
        }
    }
}