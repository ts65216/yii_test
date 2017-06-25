<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Book;

class BookController extends Controller{
    public function actionBuy($id = 0){
        Yii::info('Book控制器 buy方法');

//        $response = Yii::$app->response;
//        $response->format = \yii\web\Response::FORMAT_JSON;
//
//        $get = Yii::$app->request->get();
//        echo '<br><br><br><br>';
//        var_dump($get);

        echo "id={$id}啊啊";

        $book = new Book;
        $a = $book->buy();

        return $this->render('book',['a'=>$a, 'id'=>$id]);
    }
}