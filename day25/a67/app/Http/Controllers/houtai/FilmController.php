<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 10:31
 */

namespace App\Http\Controllers\houtai;


use App\Http\Controllers\Controller;
use App\Http\Model\Actor;
use App\Http\Model\Area;
use App\Http\Model\Director;
use App\Http\Model\Film;
use App\Http\Model\Type;
use App\Http\Model\Years;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 展示列表
     */
    public function index(Request $request)
    {
        if ($request->isMethod('get')){
            $data =Film::paginate(2);
            return view('Film.index', [
                'data' => $data
            ]);
        }elseif ($request->isMethod('post')){
            $film=new Film();
            $u_name=$request->input('res');
            //$data = $film->where('title','like',"%{$u_name}%")->get();
            $data = $film->where('title','like',"%{$u_name}%")->paginate(2);

            return view('Film.index', [
                'data' => $data
            ]);
        }
    }

//    public function soo(Request $request)
//    {
//        $film=new Film();
//        $u_name=$request->input('title');
//        //unset($u_name['_token']);
//        $res= Film::all()->where('title', 'like', "%{$u_name}%");
//        $data =$film->all();
//        return view('Film.index', [
//            'data' => $data,
//            'res'=>$res
//
//        ]);
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     * 添加展示和提交
     */
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
            //type类型
            $type=Type::all();

            return view('Film.add',[
                'actor'=>$actor,
                'area'=>$area,
                'director'=>$director,
                'years'=>$years,
                'type'=>$type
            ]);
        }elseif($request->isMethod('POST')){
            $data = $request->input();
            unset($data['_token']);

            if($file = $this->upload($request)){
                $data['img_url'] = $file;
            }

            $bool = Film::create($data);
            if($bool){
                return redirect('film/index');
            }else{
                return redirect('film/index');
            }
        }
    }

    /**
     * @param Request $request
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     * 修改展示和提交
     */
    public function edit(Request $request,$id = null)
    {
        if($request->isMethod('GET')){
            $data = Film::find($id);

            //actor演员
            $actor=Actor::all();
            //area地区
            $area=Area::all();
            //director导演
            $director=Director::all();
            //years年份
            $years=Years::all();
            //type类型
            $type=Type::all();

            return view('Film.add', [
                'data' => $data,
                'actor'=>$actor,
                'area'=>$area,
                'director'=>$director,
                'years'=>$years,
                'name'=>$type
            ]);
        }elseif($request->isMethod('POST')){
            $data = Film::find($request->input('id'));
            $bool = $data->update($request->input());
            if($bool){
                return redirect('film/index');
            }
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 删除方法
     */
    public function delete($id)
    {
        $model = Film::find($id);
        $bool = $model->delete();
        return redirect('film/index');

    }

    /**
     * @param Request $request
     * @return bool|string
     * 图片
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 搜索方法
     */
//    public function findadmin(Request $request){
//    //接收搜索的值
//            $u_name=$request->input('title');
//    //模糊查询的sql语句
//            $results =DB::table('user')->where('u_name','like','%$u_name%')->paginate(2);
//    //跳转视图层
//            return view('adminlist.user_list_seach', ['adminlist'=> $results,'u_name'=>$u_name]);
//           // 记得将搜索的关键词传过去，也就是红色字体。
//    //视图层 这么写是laravel的自带的分页但记得把下面的红色字体传给控制器层
//    ​   {!! $adminlist->appends(['name'=>$u_name])->render()!!}​
//    }
}