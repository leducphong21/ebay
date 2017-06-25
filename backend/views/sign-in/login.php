<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.6/css/AdminLTE.min.css" rel="stylesheet">
<div class="login-box">
    <div class="login-logo">
        <?php echo Html::encode($this->title) ?>
    </div><!-- /.login-logo -->
    <div class="header"></div>
    <div class="login-box-body">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="body">
            <?php echo $form->field($model, 'username') ?>
            <?php echo $form->field($model, 'password')->passwordInput([
            ]) ?>
            <div class="row">
                <div class="col-sm-6">
                    <?php echo $form->field($model, 'rememberMe')->checkbox(['class'=>'simple']) ?>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="checkbox">
                            <?=Html::a('Quên mật khẩu', ['sign-in/request-password-reset'], ['class' => 'text-right'])?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary form-control', 'name' => 'login-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php
$app_css = <<<CSS
body{
    background: #d2d6de;
}
.text-right{
float: right;
}
CSS;
$this->registerCss($app_css);



