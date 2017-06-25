<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Coin */

$this->title = 'Update Coin: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Coins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coin-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
