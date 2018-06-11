<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/8 0008
 * Time: 下午 3:52
 */

namespace app\controllers;


use app\models\Com;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\web\Controller;

class ComController extends Controller
{
    public function actionIndex() {

        $query = Com::find();
        $countQuery = clone $query;
        $pageSize = 3;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionAdd() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new Com();
        $model->content= \Yii::$app->request->post('content');
        $model->create_time = time();
        $model->update_time = time();
       //return $model;
        $bool = $model->save();
        $data =  Com::findOne(["create_time"=>$model->create_time]);
        return json_encode([
            'error' => '0'
        ]);


//        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
//        $book = new Com();
//        $data = $book->content = \Yii::$app->request->post('content');
//        $book->create_time = time();
//        $book->save();
//        return $data;
    }
    public function actionDelete()
    {
        $arr = \Yii::$app->request->get('id');
        \Yii::$app->db->createCommand()->delete('com','id='.$arr)->execute();
        $this->redirect(Url::to(['index']));
    }
}