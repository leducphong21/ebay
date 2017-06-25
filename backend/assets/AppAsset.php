<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/web/';
    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'assets/css/font-awesome.min.css',
        'assets/css/weather-icons.min.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300',
        'http://fonts.googleapis.com/css?family=Roboto:400,300',
        'assets/css/beyond.min.css',
        'assets/css/typicons.min.css',
        'assets/css/animate.min.css',
        //'css/dataTables.bootstrap.css',
        'assets/css/custome.css'
    ];
    public $js = [
        //'js/jquery.min.js',
        'assets/js/skins.min.js',
        'bootstrap/js/bootstrap.min.js',
        'assets/js/slimscroll/jquery.slimscroll.min.js',
        'assets/js/beyond.js',
        'assets/js/libs/bootbox.min.js',
        'assets/js/libs/confirm.js',
        'assets/js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
