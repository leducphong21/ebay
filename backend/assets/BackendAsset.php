<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/3/14
 * Time: 3:14 PM
 */

namespace backend\assets;

use yii\web\AssetBundle;

class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/web';

    public $css = [
        'css/style.css',
        'bootstrap/css/bootstrap.min.css',
    ];
    public $js = [
        'bootstrap/js/bootstrap.js',

        'js/libs/bootbox.min.js',
        'js/libs/confirm.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
//        'common\assets\AdminLte',
//        'common\assets\Html5shiv'
    ];
}
