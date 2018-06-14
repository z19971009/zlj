<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:44
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Tv_collection;
use Illuminate\Http\Request;


class Tv_collectionController extends Controller
{
    public function index(){
      // $list=DB::table('tv_collection')->get();
       $list=Tv_collection::all();
       //var_dump($list);die;
        return view('tv_collection/index',['list'=>$list]);
    }
    public function add(){
        return view('tv_collection/add');
    }
    public function addSave(Request $request){
        $add=$request->input();
        unset($add['_token']);
        $a= Tv_collection::create($add);
        if($a){
            return redirect('tv_collection/index');
        }
    }
    public function edit( $id){
      $edit= Tv_collection::find($id);
      return view('tv_collection/edit',['data'=>$edit]);
    }
    public function editSave(Request $request){
       //return 11;
        $edit=Tv_collection::find($request->input('id'));
       // var_dump($edit);die();
        unset($edit['_token']);
        $a= $edit->update($request->input());
        if($a){
            return redirect('tv_collection/index');
        }
    }

    public function delete( $id){
        $del=Tv_collection::find($id);
        $del->delete();
        return redirect('tv_collection/index');
    }


}