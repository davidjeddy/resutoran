<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_day}}".
 *
 * @property integer $id
 * @property integer $resu_location_id
 * @property integer $resu_day_option_id
 * @property integer $open
 * @property integer $close
 * @property integer $created_at
 * @property integer $created_byœ
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuDayOption $resuLocationDay
 * @property ResuLocation $resuLocation
 */
class ResuLocationHour extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location_hour}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_day_option_id'], 'required'],
            // todo why is this not working?
            //[['open', 'close'], 'date', 'format' => 'H:i'],
            [['open', 'close'], 'string', 'max' => 5],
            ['resu_location_id', 'unique', 'targetAttribute' => ['resu_location_id', 'resu_day_option_id'], 'message' => 'Location + Day combo already exists.'],

            [['resu_location_id', 'resu_day_option_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['resu_day_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuDayOption::className(), 'targetAttribute' => ['resu_day_option_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                 => Yii::t('resutoran', 'ID'),
            'resu_location_id'   => Yii::t('resutoran', 'Restaurant'),
            'resu_day_option_id' => Yii::t('resutoran', 'Day'),
            'open'               => Yii::t('resutoran', 'Open'),
            'close'              => Yii::t('resutoran', 'Close'),
            'created_at'         => Yii::t('resutoran', 'Created At'),
            'created_by'         => Yii::t('resutoran', 'Created By'),
            'updated_at'         => Yii::t('resutoran', 'Updated At'),
            'updated_by'         => Yii::t('resutoran', 'Updated By'),
            'deleted_at'         => Yii::t('resutoran', 'Deleted At'),
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
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }
}
