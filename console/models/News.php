<?php

namespace console\models;
use yii\helpers\StringHelper;
use Yii;

class News
{
    public static function getList()
    {
        $statusNotSend = 1;

        $sql = 'SELECT * FROM news WHERE status = :status';
        $result =  Yii::$app->db->createCommand($sql, [':status' => $statusNotSend])->queryAll();
        return self::prepareList($result);
    }

    public static function prepareList($result)
    {
        if (!empty($result) && is_array($result)){
        foreach ($result as & $item){
            $item ['content'] = StringHelper::truncate($item['content'], Yii::$app->params['shortTextLimit']);
        }
    }
        return $result;
    }



}

