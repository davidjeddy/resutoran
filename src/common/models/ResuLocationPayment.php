<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_payment".
 *
 * @property integer $resu_payment_option_id
 * @property integer $resu_location_id
 *
 * @property ResuLocation $resuLocation
 * @property ResuPaymentOption $resuPaymentOption
 */
class ResuLocationPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_payment_option_id', 'resu_location_id'], 'required'],
            [['resu_payment_option_id', 'resu_location_id'], 'integer'],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
            [['resu_payment_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuPaymentOption::className(), 'targetAttribute' => ['resu_payment_option_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resu_payment_option_id' => Yii::t('resu', 'Resu Payment Option ID'),
            'resu_location_id' => Yii::t('resu', 'Resu Location ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuPaymentOption()
    {
        return $this->hasOne(ResuPaymentOption::className(), ['id' => 'resu_payment_option_id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuLocationPaymentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationPaymentQuery(get_called_class());
    }
}
