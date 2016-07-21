<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_reservation_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationReservation[] $resuLocationReservations
 */
class ResuReservationOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_reservation_option';
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
    public function getResuLocationReservations()
    {
        return $this->hasMany(ResuLocationReservation::className(), ['resu_reservation_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuReservationOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuReservationOptionQuery(get_called_class());
    }
}
