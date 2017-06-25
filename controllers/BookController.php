<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Book;

class BookController extends Controller{
    public function actionBuy($id = 0){
        Yii::info('Book控制器 buy方法');

        $get = Yii::$app->request->get();
        echo '<br><br><br><br>';
        var_dump($get);

        if($id==1) echo "id={$id}啊啊";
        else if($id==2) echo "id={$id}啊啊";


        $book = new Book;
        $a = $book->buy();

        return $this->render('book',['a'=>$a, 'id'=>$id]);
    }
}