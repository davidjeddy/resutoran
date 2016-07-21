<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_seating_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationSeating[] $resuLocationSeatings
 */
class ResuSeatingOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_seating_option';
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
    public function getResuLocationSeatings()
    {
        return $this->hasMany(ResuLocationSeating::className(), ['resu_seating_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuSeatingOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuSeatingOptionQuery(get_called_class());
    }
}
