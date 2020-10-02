<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LogSendingVerification */

$this->title = Yii::t('app', 'Create Log Sending Verification');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Log Sending Verifications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-sending-verification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
