<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\widgets\Menu;
use yii\helpers\ArrayHelper;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <div class="navbar-header pull-left">
                <a href="../backend/" class="navbar-brand">
                    <small>
                        <img src="#" />
                    </small>
                </a>
            </div>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>

            <div class="pull-left">
                <form action="/backend/search/index">
                    <input type="text"
                           class="form-control"
                           style="margin-top: 5px; margin-left: 35px; width: 350px;"
                           placeholder="Tìm khách hàng"
                    />
                </form>
            </div>

            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>Administrator</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="email"><a>David.Stevenson@live.com</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="" class="avatar">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="#" class="pull-left">Profile</a>
                                    <a href="#" class="pull-right">Setting</a>
                                </li>

                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a class="" href="../backend/site/logout" data-method="post">Đăng xuất</a>                                    </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul><div class="setting">
                        <a id="btn-setting1" title="Setting" href="#">
                            <i class="icon glyphicon glyphicon-cog"></i>
                        </a>

                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">

            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <?php
                echo Menu::widget([
                    'options'=>['class'=>'nav sidebar-menu'],
                    'linkTemplate' => '<a href="{url}">{icon}<span class="menu-text">{label}</span>{right-icon}{badge}</a>',
                    'submenuTemplate'=>"\n<ul class=\"submenu\">\n{items}\n</ul>\n",
                    'activateParents'=>true,
                    'items'=>[
                        [
                            'label'=> 'Bảng thông tin',
                            'icon'=>'<i class="menu-icon glyphicon glyphicon-home"></i>',
                            'url'=>['/'],
                        ],
                        [
                            'label'=> 'Bàn làm việc',
                            'icon'=>'<i class="menu-icon glyphicon glyphicon-home"></i>',
                            'url'=>['#'],
                        ],
                        [
                            'label'=> 'Nhóm chức awnng 1',
                            'url' => '#',
                            'is_toggle' => 1,
                            'icon'=>'<i class="menu-icon fa fa-th"></i>',
                            //'options'=>['class'=>'open'],
                            'items'=>[
                                [
                                    'label'=> 'Chức năng 1',
                                    'url'=>['#'],
                                ],
                                [
                                    'label'=> 'Chức năng 2',
                                    'url'=>['#'],
                                ],
                                [
                                    'label'=> 'Chức năng 3',
                                    'url'=>['#'],
                                ],
                                [
                                    'label'=> 'Chức năng 4',
                                    'url'=>['#'],
                                ],
                            ]
                        ],
                    ]
                ]);
                ?>
            </div>
            <!-- /Page Sidebar -->
            <!-- Chat Bar -->

            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="/backend/">Trang chủ</a>
                        </li>
                    </ul>

                    <div class=" pull-right">
                        <a class="btn btn-default" href="#">
                            <i class="fa fa-plus withe"></i>Hành động 1
                        </a>

                        <a class="btn btn-default" href="#">
                            <i class="fa fa-plus withe"></i>Hành động 2
                        </a>

                        <a class="btn btn-default" href="#">
                            <i class="fa fa-plus withe"></i>Hành động 3
                        </a>
                    </div>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            <?= isset($this->context->heading)? $this->context->heading: $this->title ?>
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>

                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="row">
                    <div class="tabbable">
                        <?php if (Yii::$app->session->hasFlash('alert')):?>
                            <?php echo \yii\bootstrap\Alert::widget([
                                'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                                'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                            ])?>
                        <?php endif; ?>
                    </div>
                </div>
                    <?php echo $content ?>


            </div>
        </div>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
