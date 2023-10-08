<?php

namespace frontend\controllers;
use Yii;

use yii\web\Controller;

class NewsletterController extends Controller
{
    public function actionSubscribe()
    {
        return $this->render('subscribe');
    }
}