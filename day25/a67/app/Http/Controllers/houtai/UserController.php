<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 16:55
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all()->toArray();
        return view('Users.index', [
            'data' => $data
        ]);
    }

    public function add(Request $request)
    {
        if($request->isMethod('get')){
            return view('Users.add');
        }elseif($request->isMethod('POST')){
            $data = $request->input();
            unset($data['_token']);
            $bool = User::create($data);
            if($bool){
                return redirect('user/index');
            }else{
                return redirect('user/index');
            }
        }
    }

    public function edit(Request $request,$id = null)
    {
        if($request->isMethod('get')){
            $data = User::find($id);
            return view('Users.add', [
                'data' => $data
            ]);
        }elseif($request->isMethod('POST')){
            $data = User::find($request->input('id'));
            $bool = $data->update($request->input());
            if($bool){
                return redirect('user/index');
            }
        }
    }

    public function delete($id)
    {
        $model = User::find($id);
        $bool = $model->delete();
        return redirect('user/index');

    }

}