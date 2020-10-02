<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Profiles');
$this->params['breadcrumbs'][] = $this->title;
$models = $dataProvider->getModels();
$size = sizeof($models);
$h = Url::base(true);
?>
<div class="profile-index">
    <div class="panel panel-success">
        <div class="panel-heading">Các hồ sơ theo dõi sức khỏe</div>
        <div class="panel-body">
            <?php
            if ($size == 0) {
            ?>
                <p style="align: justify">Bạn chưa có hồ sơ theo dõi, hãy tạo một hồ sơ mới &raquo;</p>
            <?php
            } else {
            ?>
                <?php Pjax::begin(); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'fullName',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>

                <?php Pjax::end(); ?>
            <?php

            }
            ?>
            <p style="text-align: center"><a href="<?=$h?>/profile/create" class="btn btn-primary">Tạo hồ sơ mới &raquo;</a></p>
        </div>
    </div>
</div>
