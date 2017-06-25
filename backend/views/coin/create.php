<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Coin */

$this->title = 'Create Coin';
$this->params['breadcrumbs'][] = ['label' => 'Coins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coin-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
