<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "health_parameters".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string|null $unit
 * @property float|null $max_value
 * @property float|null $min_value
 * @property string|null $options
 * @property string|null $icon
 */
class HealthParameters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'health_parameters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
            [['max_value', 'min_value'], 'number'],
            [['name', 'type', 'unit', 'icon'], 'string', 'max' => 255],
            [['options'], 'string', 'max' => 512],
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
            'type' => Yii::t('app', 'Type'),
            'unit' => Yii::t('app', 'Unit'),
            'max_value' => Yii::t('app', 'Max Value'),
            'min_value' => Yii::t('app', 'Min Value'),
            'options' => Yii::t('app', 'Options'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }
}
