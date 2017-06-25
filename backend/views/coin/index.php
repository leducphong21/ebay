<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CoinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabbable">
    <div class="widget-body">
        <div class="table-toolbar">
            <div class="widget">
    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'code',
            'image:ntext',
            'description:ntext',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',

    [
        'class' => 'backend\grid\ActionColumn',
        'template'=>'{update} {delete}',
        'contentOptions' => ['style' => 'width:150px;text-align:center'],
        'buttons' => [
            'update' => function ($url, $model, $key) {
                return Html::a('<i class="fa fa-edit"></i>Cập nhật', $url, [
                    'title' => \Yii::t('common', 'Update'),
                    'class' => 'btn btn-info btn-xs edit'
                ]);
            },

            'delete' => function ($url, $model, $key) {
                 return Html::a('<i class="fa fa-trash-o"></i>Xóa', $url, [
                    'title' => \Yii::t('common', 'Delete'),
                    'class' => 'btn btn-danger btn-xs delete',
                    'data' => [
                        'confirm' => \Yii::t('common', 'Confirm Delete'),
                        'method' => 'post',
                    ]
                ]);
            },
        ]
    ]
        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>
