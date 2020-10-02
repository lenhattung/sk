<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */

$rels = \yii\helpers\ArrayHelper::map(\app\models\Relationship::findAll(), 'id', 'name')

?>
<style>
    h1:first-of-type {
        display: none;
    }
</style>
<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--
    <?= $form->field($model, 'userid')->textInput() ?>
    -->

    <?= $form->field($model, 'relationship')->dropDownList(
        $rels,
        ['prompt'=>'']
    )->label(''); ?>

    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateOfBirth')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobilePhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <!--

    <?= $form->field($model, 'codeAactiveMobileSMS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activeMobileSMS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codeActiveEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activeEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activeStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    -->
    <div class="center-block">
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
