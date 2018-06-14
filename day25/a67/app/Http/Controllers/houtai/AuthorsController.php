<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 16:29
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index(){
        $data=Authors::all();
        return view('authors/index',['data'=>$data]) ;
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('authors/add');
        }else if($request->isMethod('POST')){
            unset($_POST['_token']);
            $arr=Authors::create($request->input());
            if($arr){
                return redirect('authors/index');
            }else{
                alert('添加错误');
                return redirect('authors/add');
            }
        }
    }

    public function edit(Request $request,$id=null){
        if($request->isMethod('GET')){
            $data=Authors::find($id);
            return view('authors/edit',['data'=>$data]);
        }else{
            $data=Authors::find($request->input('id'))->update($request->input());
            if($data){
                return redirect('authors/index');
            }else{
                return redirect('authors/edit');
            }
        }
    }

    public function delete($id){
        $data=Authors::find($id)->delete();
        if($data){
            return redirect('authors/index');
        }
    }
}