<?php

namespace app\controllers;

class HealthMonitoringController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionChangeProfile($id){
        echo "123";
        exit();
    }
}
