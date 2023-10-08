<?php

namespace frontend\controllers;

use yii\base\Controller;

class GalleryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}