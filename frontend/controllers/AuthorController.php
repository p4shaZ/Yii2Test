<?php

namespace frontend\controllers;

use frontend\models\Author;
use Yii;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success','Good');
            return $this->redirect(['author/index']);
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
       $authorsList = Author::find()->all();
        return $this->render('index',[
            'authorsList' => $authorsList,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Author::findOne($id);
        echo '<pre>';
        print_r($model);
        echo '<pre>';
        return $this->render('update');
    }

}
