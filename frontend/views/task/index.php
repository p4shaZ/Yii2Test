
<h1 style="text-align: center;
    margin: 0 auto;
     width: 50%;" >Страница Регестрации</h1>

<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();
echo $form->field($model, 'username')->textInput();
echo '<br>';
echo $form->field($model,'password')->passwordInput();
echo '<br>';
echo $form->field($model,'email')->textInput();
echo '<br>';
echo Html::submitButton('Сохранить', ['class' => 'btn btn-success']);


ActiveForm::end();
?>
