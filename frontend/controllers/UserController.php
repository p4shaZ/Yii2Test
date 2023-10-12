<?php

namespace frontend\controllers;

use frontend\models\forms\SignupForm;
use frontend\models\User;
use Yii;
class UserController extends \yii\web\Controller
{

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionSignup(){

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Красава');
            return $this->redirect(['site/index']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}
