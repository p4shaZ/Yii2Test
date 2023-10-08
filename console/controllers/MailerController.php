<?php

namespace console\controllers;
use Yii;
use yii\console\Controller;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;


class MailerController extends Controller
{
    public function actionSend()
    {

        $newsList = News::getList();
        $subs = Subscriber::getList();
        $result = Sender::run($subs, $newsList);

    }

}
