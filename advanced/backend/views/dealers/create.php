<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dealers */

$this->title = 'Create Dealers';
$this->params['breadcrumbs'][] = ['label' => 'Dealers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
