<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii; //Библиотека
use frontend\models\Test;
class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];

        $list = Test::GetNewsList($max);

        return $this->render('index', [ //генерируем вид
            'list' => $list,
            ]);
    }

    public function actionView($id)
    {

        $item = Test::getItem($id);

        return $this->render('view', [ //генерируем вид
            'item'=>$item,
        ]);

    }
}
