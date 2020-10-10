<?php

namespace app\controllers;

use app\models\Profile;
use Yii;
use yii\bootstrap\Alert;

class HealthMonitoringController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function checkPermissionControlProfile($id){
        if(strlen(trim($id.""))==0) return false;
        $obj = Profile::find()->where(
            [
                'id' => $id,
                'userid'=>Yii::$app->user->id
            ]
        )->one();
        return isset($obj);
    }
    public function actionChangeProfile($id){
        //Đang làm tới đây.
        if($this->checkPermissionControlProfile($id)){
            $cookies = Yii::$app->response->cookies;
            $cookies->readOnly = false;
            if (isset($cookies['profile_id'])) {
                $cookies->remove('profile_id');
                unset($cookies['profile_id']);
            }
            $cookies->add(new \yii\web\Cookie([
                'name' => 'profile_id',
                'value' => $id,
            ]));
            return $this->render('index');
        }else{
            Yii::$app->response->redirect(['notification/index','msg' => Yii::t('app', 'You do not have permission to access this content!')]);
        }
    }
}
