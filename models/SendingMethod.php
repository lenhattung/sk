<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sending_method".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $active
 * @property string|null $note
 */
class SendingMethod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sending_method';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'active'], 'string', 'max' => 50],
            [['note'], 'string', 'max' => 512],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'active' => Yii::t('app', 'Active'),
            'note' => Yii::t('app', 'Note'),
        ];
    }
}
