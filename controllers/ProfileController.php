<?php

namespace app\controllers;

use app\models\User;
use Yii;
use app\models\Profile;
use app\models\ProfileSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['=', 'userid', \Yii::$app->user->identity->getId()]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Profile model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if($model->userid!=\Yii::$app->user->identity->getId()) $model=null;
        if(isset($model))
            return $this->render('view', [
                'model' => $model,
            ]);
        else {
            $this->layout='error';
            echo Yii::t('app', 'You do not have permission to access this content!');
        }
    }

    /**
     * Creates a new Profile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Profile();

        if ($model->load(Yii::$app->request->post())) {
            $model->userid = \Yii::$app->user->identity->getId();
            $model->codeAactiveMobileSMS = UserController::get6OTP();
            $model->codeActiveEmail = UserController::get6OTP();
            $model->activeStatus = "1";

            if($model->save()) {
                $model->refresh();
                $file = UploadedFile::getInstance($model, 'avatar');
                if (isset($file)) {
                    $name = $model->userid.'_'.sha1($model->userid).'_'.sha1('round(microtime(true) * 1000)').'_'.$model->id;
                    $file->saveAs( 'upload/profile/avatar/'.$name.'.'.$file->extension );
                    $model->avatar =  $name.'.'.$file->extension;
                    $imagine = Image::getImagine();
                    $image = $imagine->open('upload/profile/avatar/'.$model->avatar);
                    $image->resize(new Box(300, 300))->save('upload/profile/avatar/'.$model->avatar, ['quality' => 70]);
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Profile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model1 = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->avatar=$model1->avatar;
            if($model->save()) {
                $model->refresh();
                $file = UploadedFile::getInstance($model, 'avatar');
                if (isset($file)&&strlen($file->baseName)>0) {
                    $name = $model->userid.'_'.sha1($model->userid).'_'.sha1('round(microtime(true) * 1000)').'_'.$model->id;
                    $file->saveAs( 'upload/profile/avatar/'.$name.'.'.$file->extension );
                    $model->avatar =  $name.'.'.$file->extension;
                    $imagine = Image::getImagine();
                    $image = $imagine->open('upload/profile/avatar/'.$model->avatar);
                    $image->resize(new Box(300, 300))->save('upload/profile/avatar/'.$model->avatar, ['quality' => 70]);
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Profile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
