<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_sending_verification".
 *
 * @property int $id
 * @property string $datetime
 * @property int $userId
 * @property string $content
 * @property string $verificationCode
 * @property int|null $sendingMethodId
 * @property string|null $status
 * @property int|null $numberOrderMsg1Day
 * @property string|null $sendingCode
 *
 * @property SendingMethod $sendingMethod
 * @property User $user
 */
class LogSendingVerification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_sending_verification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime', 'content', 'verificationCode'], 'required'],
            [['datetime'], 'safe'],
            [['userId', 'sendingMethodId', 'numberOrderMsg1Day'], 'integer'],
            [['content'], 'string', 'max' => 512],
            [['verificationCode', 'status', 'sendingCode'], 'string', 'max' => 50],
            [['sendingMethodId'], 'exist', 'skipOnError' => true, 'targetClass' => SendingMethod::className(), 'targetAttribute' => ['sendingMethodId' => 'id']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'datetime' => Yii::t('app', 'Datetime'),
            'userId' => Yii::t('app', 'User ID'),
            'content' => Yii::t('app', 'Content'),
            'verificationCode' => Yii::t('app', 'Verification Code'),
            'sendingMethodId' => Yii::t('app', 'Sending Method ID'),
            'status' => Yii::t('app', 'Status'),
            'numberOrderMsg1Day' => Yii::t('app', 'Number Order Msg1 Day'),
            'sendingCode' => Yii::t('app', 'Sending Code'),
        ];
    }

    /**
     * Gets query for [[SendingMethod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSendingMethod()
    {
        return $this->hasOne(SendingMethod::className(), ['id' => 'sendingMethodId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
