<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LogSendingMessage */

$this->title = Yii::t('app', 'Create Log Sending Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Log Sending Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-sending-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
