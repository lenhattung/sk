<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property int $userid
 * @property string $fullName
 * @property string|null $dateOfBirth
 * @property string|null $gender
 * @property string|null $mobilePhone
 * @property string|null $email
 * @property string|null $codeAactiveMobileSMS
 * @property string|null $activeMobileSMS
 * @property string|null $codeActiveEmail
 * @property string|null $activeEmail
 * @property string|null $activeStatus
 * @property string|null $note
 * @property string|null $language
 * @property string|null $relationship
 * @property string|null $avatar
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userid'], 'integer'],
            [['dateOfBirth'], 'safe'],
            [['fullName', 'email', 'note'], 'string', 'max' => 255],
            [['avatar'], 'file',  'extensions' => 'png,jpg','maxSize'=>1024*1024*10],
            [['gender', 'mobilePhone', 'codeAactiveMobileSMS', 'activeMobileSMS', 'codeActiveEmail', 'activeEmail', 'activeStatus', 'language', 'relationship'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'userid' => Yii::t('app', 'Userid'),
            'fullName' => Yii::t('app', 'Full Name'),
            'dateOfBirth' => Yii::t('app', 'Date Of Birth'),
            'gender' => Yii::t('app', 'Gender'),
            'mobilePhone' => Yii::t('app', 'Mobile Phone'),
            'email' => Yii::t('app', 'Email'),
            'codeAactiveMobileSMS' => Yii::t('app', 'Code Aactive Mobile Sms'),
            'activeMobileSMS' => Yii::t('app', 'Active Mobile Sms'),
            'codeActiveEmail' => Yii::t('app', 'Code Active Email'),
            'activeEmail' => Yii::t('app', 'Active Email'),
            'activeStatus' => Yii::t('app', 'Active Status'),
            'note' => Yii::t('app', 'Note'),
            'language' => Yii::t('app', 'Language'),
            'relationship' => Yii::t('app', 'Relationship'),
            'avatar' => Yii::t('app', 'Avatar'),
        ];
    }
}
