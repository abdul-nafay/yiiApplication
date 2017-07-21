<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DealersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dealers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dealers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'role',
            'name',
            'mobile_No_1',
            'mobile_No_2',
            'landLineNo',
            // 'email:email',
            // 'nicNo',
            // 'refferedBy',
            // 'notes',
            // 'address',
            // 'dealer_Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
