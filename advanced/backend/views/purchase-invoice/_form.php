<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

use yii\helpers\ArrayHelper;

use backend\models\Products;
use backend\models\Dealers;
/* @var $this yii\web\View */
/* @var $model backend\models\PurchaseInvoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-invoice-form">

     <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'bill_no')->textInput(['maxlength' => true]) ?>

    
      <?= $form->field($model, 'supplier_name')->dropDownList(
            ArrayHelper::map(Dealers::find()->all(),'name','name'),
            ['prompt'=>'Select Name of Supplier']
    ) ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

     

        <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Addresses</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 10, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsInventory[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'product_name',
                    'quantity',
                    'price',
                    
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsInventory as $i => $modelsInventory): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Address</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelsInventory->isNewRecord) {
                                echo Html::activeHiddenInput($modelsInventory, "[{$i}]id");
                            }
                        ?>
                      
                      
                        <div class="row">
                            <div class="col-sm-4">
                                <?= $form->field($modelsInventory, "[{$i}]product_name")->dropDownList(
                                 ArrayHelper::map(Products::find()->all(),'product_name','product_name'),
                                     ['prompt'=>'Select Category of Product']
                                 ) ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($modelsInventory, "[{$i}]quantity")->textInput(['maxlength' => true]) ?>
                            </div>
                             <div class="col-sm-4">
                             <?= $form->field($modelsInventory, "[{$i}]price")->textInput(['maxlength' => true]) ?>
                                 </div>
                            
                        </div><!-- .row -->
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
