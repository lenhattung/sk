<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LogSendingVerificationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="log-sending-verification-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'datetime') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'verificationCode') ?>

    <?php // echo $form->field($model, 'sendingMethodId') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'numberOrderMsg1Day') ?>

    <?php // echo $form->field($model, 'sendingCode') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
