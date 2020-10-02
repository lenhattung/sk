<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .navbar-toggle{
            display: none;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-leaf"></span> ' . Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-fixed-top bg-success',
            'style' => 'font-size:10px'
        ]
    ]);

//    echo Nav::widget([
//
//        'items' => [
//            ['label' => 'Trang chủ', 'url' => ['/site/index']],
//            ['label' => 'Giới thiệu dự án', 'url' => ['/site/about']],
//            ['label' => 'Liên hệ', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//            ['label' => 'Đăng nhập', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//        'encodeLabels' => false,
//        'options' => [
//            'class' => 'navbar-nav navbar-right'
//        ],
//    ]);
        NavBar::end();
    ?>
    <br/>
    <div class="container" style="padding-top: 50px; height: 100%">
        <?php echo Alert::widget() ?>
        <?php echo $content ?>
    </div>
</div>

<!-- background-color: #dff0d8; -->
<footer class="footer" style="background-color: #dff0d8;">
    <div class="container">
        <p class="pull-left">&copy; RoyalSK Team <?= date('Y') ?>  </p>
        <p class="pull-right"> <a href="#">
                <span class="glyphicon glyphicon-qrcode" style="font-size: 15px;"></span>
            </a></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
