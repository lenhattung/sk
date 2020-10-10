<?php

use \app\models\HealthParameters;
use \yii\helpers\Url;
use \app\models\Profile;

/* @var $this yii\web\View */
?>
<script>
    function changeProfile(){
       var value = $("#profile_id :selected").val();
       // alert(value);
       window.location.href = "<?php echo Url::base(true)?>/health-monitoring/change-profile?id="+value;
    }
</script>
<?php
$cookies = Yii::$app->request->cookies;
$profile_id = -1;
if ($cookies->get('profile_id')!=null) $profile_id = $cookies->get('profile_id')->value;
?>
<center>
    <h4><?= \Yii::t('app', 'Monitoring health for') ?></h4>
    <select class="form form-control" id="profile_id" onchange="changeProfile()">
        <option value="-1"><?= \Yii::t('app', 'Select profile to monitor health') ?></option>
        <?php
        $profiles = Profile::find()->where("userid=" . Yii::$app->user->identity->getId())->all();
        foreach ($profiles as $p) {
            ?>
            <option value="<?= $p->id ?>" <?=(($p->id==$profile_id)?'selected=\"selected\"':'')?>><?= $p->fullName ?></option>
        <?php } ?>
    </select>
</center>
<?php
if (isset($profile_id)) {
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

<?php } ?>
