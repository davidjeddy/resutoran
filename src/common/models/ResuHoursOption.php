<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_hours_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationHours[] $resuLocationHours
 */
class ResuHoursOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_hours_option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resu', 'ID'),
            'value' => Yii::t('resu', 'Value'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationHours()
    {
        return $this->hasMany(ResuLocationHours::className(), ['resu_hours_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuHoursOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuHoursOptionQuery(get_called_class());
    }
}
