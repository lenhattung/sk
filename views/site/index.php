<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'SỔ SỨC KHỎE';
$h = Url::base();


?>
<div class="site-index">
    <div class="panel panel-success">
        <?php if (Yii::$app->user->isGuest) { ?>
            <div class="body-content">
                <div class="col-lg-12">
                    <h4 class="text-primary text-center"><span class="glyphicon glyphicon-heart-empty"
                                                               style="color: red"></span> <?=Yii::t('app',  'About RoyalSK')?></h4>
                    <p align="justify"><b>RoyalSK </b> <?=Yii::t('app',  'is a free project on health monitoring for Vietnamese users in many countries')?></p>
                    <p align="justify"> <?=Yii::t('app',  'You can monitor the health of yourself and your family members such as: medical history, health status, weight, blood pressure, blood sugar, temperature, menstrual cycle ...')?></p>
                    <p align="justify"> <?=Yii::t('app',  'You can also create a calendar reminder so you do not forget it: take your pills, shots, and checkups.')?></p>
                    <p align="justify"> <?=Yii::t('app',  'Multi-language platform makes it easy to talk with doctors in the countries about your health parameters during your visit.')?></p>
                    <p><a class="btn btn-default btn-block btn-warning" href="<?= $h ?>/regulation-confirmation"> <?=Yii::t('app',  'Register a new account')?>
                            &raquo;</a></p>
                    <p><a class="btn btn-default btn-block btn-success" href="<?= $h ?>/site/login"> <?=Yii::t('app',  'Login')?> &raquo;</a></p>
                </div>
            </div>
        <?php } else { ?>
            <div class="body-content" style="padding-left: 5px; padding-right: 5px; padding-top: 5px; text-align: left ">
                <div class="row">
                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="<?=$h?>/health-monitoring"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-scale"></span> <?=Yii::t('app',  'Health monitoring')?></h4></a>
                    </div>

                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="#"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-list-alt"></span> <?=Yii::t('app',  'Medical records')?>
                            </h4></a>
                    </div>
                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="#"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-search"></span> <?=Yii::t('app',  'Look up health examination locations')?>
                                </h4></a>
                    </div>



                </div>
                <div class="row">

                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="#"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-erase"></span> <?=Yii::t('app',  'Remind your medication schedule')?>
                            </h4></a>
                    </div>

                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="#"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-screenshot"></span> <?=Yii::t('app',  'Vaccination reminders')?>
                            </h4></a>
                    </div>
                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="#"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-object-align-right"></span> <?=Yii::t('app',  'Remind a health check')?>
                            </h4></a>
                    </div>

                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="<?=$h?>/profile""><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-briefcase"></span> <?=Yii::t('app',  'Profiles management')?>
                            </h4></a>
                    </div>
                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="<?=$h?>/my-user"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-user"></span> <?=Yii::t('app',  'Account management')?>
                            </h4></a>
                    </div>
                    <div class="col-lg-4" style="padding-top: 10px">
                        <a class="btn btn-block btn-default" href="<?=$h?>/site/logout"><h4 class="text-primary text-left"><span class="text-success glyphicon glyphicon-log-out"></span> <?=Yii::t('app',  'Log out')?>
                            </h4></a>
                </div>
            </div>
        <?php } ?>
        <div class="panel-body text-center text-primary" style="font-size: 16px; font-weight: bold">
            <?=Yii::t('app',  'Good health and clear intelligence are the two happiest things of life!')?>
        </div>
    </div>
</div>
<!-- Check Active -->
<?php

?>
