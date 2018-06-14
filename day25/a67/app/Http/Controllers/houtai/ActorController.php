<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:49
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index(){
        // $list=DB::table('tv_collection')->get();
        $list=Actor::all();
        //var_dump($list);die;
        return view('actor/index',['list'=>$list]);
    }
    public function add(){
        return view('actor/add');
    }
    public function addSave(Request $request){
        $add=$request->input();
        unset($add['_token']);
        $a= Actor::create($add);
        if($a){
            return redirect('actor/index');
        }
    }
    public function edit( $id){
        $edit= Actor::find($id);
        return view('actor/edit',['data'=>$edit]);
    }
    public function editSave(Request $request){
        //return 11;
        $edit=Actor::find($request->input('id'));
        // var_dump($edit);die();
        unset($edit['_token']);
        $a= $edit->update($request->input());
        if($a){
            return redirect('actor/index');
        }
    }

    public function delete( $id){
        $del=Actor::find($id);
        $del->delete();
        return redirect('actor/index');
    }
}