<?php

namespace app\controllers;

class NotificationController extends \yii\web\Controller
{
    public function actionIndex($msg)
    {
        return $this->render('index', [
            'msg'=>$msg
        ]);
    }

}
