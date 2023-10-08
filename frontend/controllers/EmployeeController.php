<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Animals;
use frontend\models\example\Human;

class EmployeeController extends Controller{
    public function actionIndex()
    {
        $employee1 = new  Employee();
        $employee1 ->firstName = 'Pasha';
        $employee1 ->lastName = 'Zhukov';
        $employee1 ->middleName = 'Sergeevich';
        $employee1 ->salary = 100000;

        echo $employee1['salary'];
        echo '<br>' . '<hr>';
        foreach ($employee1 as $attribute=>$value) {
            echo "$attribute: $value" . '<br>';

        }
        echo '<hr>';
        $arr = $employee1->toArray();
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    public function actionTest()
    {
          $human1 = new Human();
          $animal1 = new Animals();

          $animal1 ->walk();
          echo '<br>';
          $human1->walk();
    }

    public function actionRegister()
    {
        $model = new Employee();
        $model -> scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        if ($model ->load(Yii::$app->request->post()) ){

         if($model -> validate() && $model->save()){
             Yii::$app->session->setFlash('success', 'Registered!!');
         }
        }
        return $this->render('register',[
            'model' => $model,
        ]);
    }
    public function actionUpdate()
    {

        $model = new Employee();
        $model -> scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){
            $model -> attributes = $formData;

            if($model -> validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Update!!');
            }
        }
        return $this->render('update',[
            'model' => $model,
        ]);
    }

}
