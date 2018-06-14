<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 15:16
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Novel;
use App\Http\Model\Type;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        $data = Novel::all();
        return view('Novel.index', [
            'data' => $data
        ]);
    }

    public function add(Request $request)
    {
        if($request->isMethod('GET')){


            //type类型
            $type=Type::all();

            return view('Novel.add',[
                'type'=>$type
            ]);
        }elseif($request->isMethod('POST')){
            $data = $request->input();
            unset($data['_token']);


            if($file = $this->upload($request)){
                $data['img_url'] = $file;
            }

            $bool = Novel::create($data);
            if($bool){
                return redirect('novel/index');
            }else{
                return redirect('novel/index');
            }
        }
    }

    public function edit(Request $request,$id = null)
    {
        if($request->isMethod('GET')){
            $data = Novel::find($id);



            //type类型
            $type=Type::all();

            return view('novel.add', [
                'data' => $data,
                'type'=>$type
            ]);
        }elseif($request->isMethod('POST')){
            $data = Novel::find($request->input('id'));

            if($file = $this->upload($request)){
                $data['img_url'] = $file;
            }

            $bool = $data->update($request->input());
            if($bool){
                return redirect('novel/index');
            }
        }
    }

    public function delete($id)
    {
        $model = Novel::find($id);
        $model->delete();
        return redirect('novel/index');

    }


    public function upload(Request $request){
        if($file = $request->file('img_url')) { //获取UploadFile实例
            if ($file->isValid()) {//判断文件是否有效
                $txt = $file->getClientOriginalExtension(); //获取扩展名
                $filename = time() . '.' . $txt; //重命名
                if ($file->move('D:\php\code\day25\a67\public\upload', $filename)) {//移动至指定目录
                    return '/upload/'.$filename;
                } else {
                    return false;
                }
            }
        }
    }

}