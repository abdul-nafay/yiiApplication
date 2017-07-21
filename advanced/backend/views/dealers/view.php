<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Dealers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dealers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->dealer_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->dealer_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'role',
            'name',
            'mobile_No_1',
            'mobile_No_2',
            'landLineNo',
            'email:email',
            'nicNo',
            'refferedBy',
            'notes',
            'address',
            'dealer_Id',
        ],
    ]) ?>

</div>
