<?php
namespace app\models;

use Yii;
use yii\base\Model;

class Book extends Model {
    public $price;
    public $name;

    public function buy(){
        Yii::info('Book模型');
        return 1;
    }
}