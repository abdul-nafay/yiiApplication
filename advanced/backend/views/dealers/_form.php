<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dealers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dealers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role')->dropDownlist(['customer'=>'Customer' , 'supplier'=>'Supplier'],['prompt'=>"Select the type of the dealer"])?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_No_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_No_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landLineNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nicNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refferedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
