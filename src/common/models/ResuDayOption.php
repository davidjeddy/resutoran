<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_day_option}}".
 *
 * @property integer $id
 * @property string $value
 * @property string $abbr
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocationDay[] $resuLocationDays
 */
class ResuDayOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_day_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'abbr', 'created_by'], 'required'],
            [['value'], 'string'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['abbr'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'value' => Yii::t('resutoran', 'Value'),
            'abbr' => Yii::t('resutoran', 'Abbr'),
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
    public function getResuLocationDays()
    {
        return $this->hasMany(ResuLocationDay::className(), ['resu_day_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ResuDayOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuHourValueQuery(get_called_class());
    }
}
