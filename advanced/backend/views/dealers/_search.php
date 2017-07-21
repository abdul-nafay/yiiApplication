<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DealersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dealers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'role') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mobile_No_1') ?>

    <?= $form->field($model, 'mobile_No_2') ?>

    <?= $form->field($model, 'landLineNo') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'nicNo') ?>

    <?php // echo $form->field($model, 'refferedBy') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'dealer_Id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
