<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:41
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        // $list=DB::table('tv_collection')->get();
        $list=Area::all();
        //var_dump($list);die;
        return view('area/index',['list'=>$list]);
    }
    public function add(){
        return view('area/add');
    }
    public function addSave(Request $request){
        $add=$request->input();
        unset($add['_token']);
        $a= Area::create($add);
        if($a){
            return redirect('area/index');
        }
    }
    public function edit( $id){
        $edit= Area::find($id);
        return view('area/edit',['data'=>$edit]);
    }
    public function editSave(Request $request){
        //return 11;
        $edit=Area::find($request->input('id'));
        // var_dump($edit);die();
        unset($edit['_token']);
        $a= $edit->update($request->input());
        if($a){
            return redirect('area/index');
        }
    }

    public function delete( $id){
        $del=Area::find($id);
        $del->delete();
        return redirect('area/index');
    }
}