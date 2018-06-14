<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:45
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        // $list=DB::table('tv_collection')->get();
        $list=Director::all();
        //var_dump($list);die;
        return view('director/index',['list'=>$list]);
    }
    public function add(){
        return view('director/add');
    }
    public function addSave(Request $request){
        $add=$request->input();
        unset($add['_token']);
        $a= Director::create($add);
        if($a){
            return redirect('director/index');
        }
    }
    public function edit( $id){
        $edit= Director::find($id);
        return view('director/edit',['data'=>$edit]);
    }
    public function editSave(Request $request){
        $edit=Director::find($request->input('id'));
        //var_dump($edit);die();
        unset($edit['_token']);
        $a= $edit->update($request->input());
        if($a){
            return redirect('director/index');
        }
    }

    public function delete( $id){
        $del=Director::find($id);
        $del->delete();
        return redirect('director/index');
    }
}