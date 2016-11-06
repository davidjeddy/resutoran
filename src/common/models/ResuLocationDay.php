<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_day}}".
 *
 * @property integer $id
 * @property integer $resu_day_option_id
 * @property integer $resu_location_id
 * @property integer $resu_hour_value_id
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuDayOption $resuDayOption
 * @property ResuHourValue $resuHourValue
 * @property ResuLocation $resuLocation
 */
class ResuLocationDay extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location_day}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['resu_day_option_id', 'resu_location_id', 'resu_hour_value_id', 'created_by'], 'required'],
            [['resu_day_option_id', 'resu_location_id', 'resu_hour_value_id'], 'required'],
            [['resu_day_option_id', 'resu_location_id', 'resu_hour_value_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['resu_day_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuDayOption::className(), 'targetAttribute' => ['resu_day_option_id' => 'id']],
            [['resu_hour_value_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuHourValue::className(), 'targetAttribute' => ['resu_hour_value_id' => 'id']],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'resu_day_option_id' => Yii::t('resutoran', 'Resu Day Option ID'),
            'resu_location_id' => Yii::t('resutoran', 'Resu Location ID'),
            'resu_hour_value_id' => Yii::t('resutoran', 'Resu Hour Value ID'),
            'created_at' => Yii::t('resutoran', 'Created At'),
            'created_by' => Yii::t('resutoran', 'Created By'),
            'updated_at' => Yii::t('resutoran', 'Updated At'),
            'updated_by' => Yii::t('resutoran', 'Updated By'),
            'deleted_at' => Yii::t('resutoran', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuDayOption()
    {
        return $this->hasOne(ResuDayOption::className(), ['id' => 'resu_day_option_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuHourValue()
    {
        return $this->hasOne(ResuHourValue::className(), ['id' => 'resu_hour_value_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }
}
