<?php

namespace console\models;

use Yii;

class Sender
{
    public static function run ($subs,$newsList)
    {
        foreach ($subs as $sub)
        {
            $result = Yii::$app->mailer->compose('mailer/newsList',
                [
                     'newsList' => $newsList, // Передайте данные, которые вы хотите использовать в представлении
                ])
                    ->setFrom('test.php.up@gmail.com')
                    ->setTo($sub['email'])
                    ->setSubject('Тема')
                    ->setTextBody('Текст')
                    ->send();


                 var_dump($result);

        }
    }
}


