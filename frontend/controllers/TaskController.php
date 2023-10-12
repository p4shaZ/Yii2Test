<?php

namespace frontend\controllers;

use frontend\models\Task;
use Yii;
class TaskController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Task();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Здесь производится сохранение модели
            if ($model->save()) {
                // Перенаправление после успешного сохранения
                Yii::$app->session->setFlash('success', 'Задача успешно создана.');
            }
        }
        return $this->render('index',[
            'model'=>$model,
        ]);
    }

}
