<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/11
 * Time: 17:03
 */

namespace APP\Http\Controllers\Login;


use App\Http\Model\Login;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login()
    {
        $model = new Login();
        $data = $model->create();

        if($model->check($_POST)){

        }
    }

}