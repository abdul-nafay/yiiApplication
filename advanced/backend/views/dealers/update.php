<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dealers */

$this->title = 'Update Dealers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dealers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->dealer_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dealers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
