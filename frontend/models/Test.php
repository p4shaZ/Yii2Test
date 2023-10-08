<?php
namespace frontend\models;
use Yii;
use yii\helpers\StringHelper;


class Test
{
    public static function GetNewsList($max){

        $max = intval($max);

        $sql = 'SELECT * FROM `news` LIMIT ' . $max;

        $result =  Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($result) && is_array($result)){
            foreach ($result as &$item){
                $item ['content'] = StringHelper::truncate($item['content'], Yii::$app->params['shortTextLimit']);
            }
        }
        return $result;
    }

    public static function getItem($id)
    {
        $id = intval($id);

        $sql = 'SELECT * FROM `news` WHERE id = ' . $id;

        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}
