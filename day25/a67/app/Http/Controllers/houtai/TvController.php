<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 14:58
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Actor;
use App\Http\Model\Area;
use App\Http\Model\Director;
use App\Http\Model\Tv;
use App\Http\Model\Tv_collection;
use App\Http\Model\Type;
use App\Http\Model\Years;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TvController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')){
            $data =Tv::paginate(2);
            return view('tv.index', [
                'data' => $data
            ]);
        }elseif ($request->isMethod('post')){
            $film=new Tv();
            $u_name=$request->input('res');
            //$data = $film->where('title','like',"%{$u_name}%")->get();
            $data = $film->where('tv_name','like',"%{$u_name}%")->paginate(2);

            return view('tv.index', [
                'data' => $data
            ]);
        }
    }

    public function add(Request $request)
    {
        if($request->isMethod('GET')){
            //actor演员
            $actor=Actor::all();
            //area地区
            $area=Area::all();
            //director导演
            $director=Director::all();
            //years年份
            $years=Years::all();
            //tv_collection电视简介
            $tv_collection=Tv_collection::all();
            //type类型
            $type=Type::all();


            return view('Tv.add',[
                'actor'=>$actor,
                'area'=>$area,
                'director'=>$director,
                'years'=>$years,
                'tv_collection'=>$tv_collection,
                'type'=>$type

            ]);
        }elseif($request->isMethod('POST')){
            $data = $request->input();
            unset($data['_token']);

            if($file = $this->upload($request)){
                $data['img_url'] = $file;
            }

            $bool = Tv::create($data);
            if($bool){
                return redirect('tv/index');
            }else{
                return redirect('tv/index');
            }
        }
    }

    public function edit(Request $request,$id = null)
    {
        if($request->isMethod('GET')){
            $data = Tv::find($id);

            //actor演员
            $actor=Actor::all();
            //area地区
            $area=Area::all();
            //director导演
            $director=Director::all();
            //years年份
            $years=Years::all();
            //tv_collection电视简介
            $tv_collection=Tv_collection::all();
            //type类型
            $type=Type::all();

            return view('Tv.add', [
                'data' => $data,
                'actor'=>$actor,
                'area'=>$area,
                'director'=>$director,
                'years'=>$years,
                'tv_collection'=>$tv_collection,
                'type'=>$type

            ]);
        }elseif($request->isMethod('POST')){
            $data = Tv::find($request->input('id'));

            if($file = $this->upload($request)){
                $data['img_url'] = $file;
            }

            if($file = $this->upload($request)){
                $data['img_url'] = $file;
            }

            $bool = $data->update($request->input());
            if($bool){
                return redirect('tv/index');
            }
        }
    }

    public function delete($id)
    {
        $model = Tv::find($id);
        $model->delete();
        return redirect('tv/index');

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