<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 16:51
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Novel_chapter;
use Illuminate\Http\Request;

class Novel_chapterController extends Controller
{

    public function index(){
        $data=Novel_chapter::all();
        return view('Novel_chapter/index',['data'=>$data]) ;
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('Novel_chapter/add');
        }else if($request->isMethod('POST')){
            unset($_POST['_token']);
            $arr=Novel_chapter::create($request->input());
            if($arr){
                return redirect('novel_chapter/index');
            }else{
                return redirect('novel_chapter/add');
            }
        }
    }

    public function edit(Request $request,$id=null){
        if($request->isMethod('GET')){
            $data=Novel_chapter::find($id);
            return view('Novel_chapter/edit',['data'=>$data]);
        }else{
            $data=Novel_chapter::find($request->input('id'))->update($request->input());
            if($data){
                return redirect('novel_chapter/index');
            }else{
                return redirect('novel_chapter/edit');
            }
        }
    }

    public function delete($id){
        $data=Novel_chapter::find($id)->delete();
        if($data){
            return redirect('novel_chapter/index');
        }
    }
}