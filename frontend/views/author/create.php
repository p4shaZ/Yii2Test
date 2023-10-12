<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>Create new Author</h1>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model,'first_name'); ?>

    <?php echo $form->field($model,'last_name'); ?>

    <?php echo $form->field($model,'birthdate'); ?>

    <?php echo $form->field($model,'reting'); ?>

    <br>

    <?php echo Html::submitButton('Save',[
            'class' => 'btn btn-primary'
    ]); ?>

<?php $form = ActiveForm::end();

