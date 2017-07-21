<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PurchaseInvoice */

$this->title = 'Create Purchase Invoice';
$this->params['breadcrumbs'][] = ['label' => 'Purchase Invoices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-invoice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsInventory' => $modelsInventory,
    ]) ?>

</div>
