<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?php ActiveForm::end(); ?>

</div>
<hr/>
<div class="form-group row">
    <div class="col-sm-12 text-center">
        <a href="change-email" class="btn btn-success">Đổi email</a>
        <a href="change-password" class="btn btn-warning">Đổi mật khẩu</a>
        <a href="delete-user" class="btn btn-delete">Xóa tài khoản</a>
    </div>
</div>
