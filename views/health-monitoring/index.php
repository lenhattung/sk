<?php

use \app\models\HealthParameters;
use \yii\helpers\Url;
use \app\models\Profile;

/* @var $this yii\web\View */
?>
<script>
    function changeProfile(){
       var value = $("#profile_id :selected").val();
       alert(value);
       window.location.href = "change-profile?id="+value;
    }
</script>
<?php
$profile = null;
if (isset($_COOKIE['profileid'])) $profile = $_COOKIE['profileid'];
if (isset($profile)) {
    ?>
    <div class="container">
        <div class="row">
            <?php
            $prs = HealthParameters::find()->all();
            foreach ($prs as $pr) {
                ?>
                <div class="col-sm-2 col-xs-6"><a href="#" class="btn btn-default" style="margin-top: 10px"><img
                                src="<?= Url::base(true) . '/' . $pr->icon ?>" width="120px"
                                height="120px"/><br/><?= \Yii::t('app', $pr->name) ?></a></div>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <center>
        <h4><?= \Yii::t('app', 'Select profile to monitor health') ?></h4>
        <select class="form form-control" id="profile_id" onchange="changeProfile()">
            <option></option>
            <?php
            $profiles = Profile::find()->where("userid=" . Yii::$app->user->identity->getId())->all();
            foreach ($profiles as $p) {
                ?>
                <option value="<?= $p->id ?>"><?= $p->fullName ?></option>
            <?php } ?>
        </select>
    </center>
<?php } ?>
