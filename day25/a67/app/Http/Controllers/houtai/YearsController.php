<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 14:55
 */

namespace App\Http\Controllers\houtai;

use App\Http\Controllers\Controller;
use App\Http\Model\Years;
use Illuminate\Http\Request;

class YearsController extends Controller
{
    public function index(){
        $data=Years::all();
        return view('Years/index',['data'=>$data]) ;
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('Years/add');
        }else if($request->isMethod('POST')){
            unset($_POST['_token']);
            $arr=Years::create($request->input());
            if($arr){
                return redirect('years/index');
            }else{
                alert('添加错误');
                return redirect('years/add');
            }
        }
    }

    public function edit(Request $request,$id=null){
        if($request->isMethod('GET')){
            $data=Years::find($id);
            return view('years/edit',['data'=>$data]);
        }else{
            $data=Years::find($request->input('id'))->update($request->input());
            if($data){
                return redirect('years/index');
            }else{
                return redirect('years/edit');
            }
        }
    }

    public function delete($id){
        $data=Years::find($id)->delete();
        if($data){
            return redirect('years/index');
        }
    }

}