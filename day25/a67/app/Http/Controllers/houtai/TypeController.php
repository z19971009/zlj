<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 10:50
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index()
    {
        $data = Type::all()->toArray();
        return view('Type.index', [
            'data' => $data
        ]);
    }

    public function add(Request $request)
    {
        if($request->isMethod('get')){
            return view('Type.add');
        }elseif($request->isMethod('POST')){
            $data = $request->input();
            unset($data['_token']);
            $bool = Type::create($data);
            if($bool){
                return redirect('type/index');
            }else{
                return redirect('type/index');
            }
        }
    }

    public function edit(Request $request,$id = null)
    {
        if($request->isMethod('get')){
            $data = Type::find($id);
            return view('Type.add', [
                'data' => $data
            ]);
        }elseif($request->isMethod('POST')){
            $data = Type::find($request->input('id'));
            $bool = $data->update($request->input());
            if($bool){
                return redirect('type/index');
            }
        }
    }

    public function delete($id)
    {
        $model = Type::find($id);
        $bool = $model->delete();
        return redirect('type/index');

    }



}