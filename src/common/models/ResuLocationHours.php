<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_hours".
 *
 * @property integer $resu_location_id
 * @property integer $resu_hours_option_id
 *
 * @property ResuHoursOption $resuHoursOption
 * @property ResuLocation $resuLocation
 */
class ResuLocationHours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_hours';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_hours_option_id'], 'required'],
            [['resu_location_id', 'resu_hours_option_id'], 'integer'],
            [['resu_hours_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuHoursOption::className(), 'targetAttribute' => ['resu_hours_option_id' => 'id']],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resu_location_id' => Yii::t('resu', 'Resu Location ID'),
            'resu_hours_option_id' => Yii::t('resu', 'Resu Hours Option ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuHoursOption()
    {
        return $this->hasOne(ResuHoursOption::className(), ['id' => 'resu_hours_option_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuLocationHoursQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationHoursQuery(get_called_class());
    }
}
