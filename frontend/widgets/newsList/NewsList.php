<?php

namespace frontend\widgets\newsList;
use yii\base\Widget;
use Yii;
use  frontend\models\Test;


class NewsList extends Widget
{
    public $showLimit = null;

    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];
        if ($this -> showLimit){
            $max =$this->showLimit;
        }

        $list = Test::GetNewsList($max);

        return $this->render('block', [ //генерируем вид
            'list' => $list,
        ]);
    }
}