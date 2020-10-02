<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SendingMethod */

$this->title = Yii::t('app', 'Create Sending Method');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sending Methods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sending-method-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
