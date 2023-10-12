<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Регистрация";
$this->params['breadcrumbs'] [] =$this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Ведите данные для регистрации</p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model,'username')->textInput(['autofocus' => true])?>

            <?= $form->field($model, 'email', ['enableAjaxValidation' => true])
                ->textInput(['autofocus' => true])
                ->input('email', ['style' => 'border-color:' . ($model->hasErrors('email') ? 'red' : '')])
            ?>

            <?= $form->field($model,'password')->passwordInput() ?> <br>

            <div class="form-group">

                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>

</div>
