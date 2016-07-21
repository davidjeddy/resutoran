<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_payment_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationPayment[] $resuLocationPayments
 */
class ResuPaymentOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_payment_option';
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
    public function getResuLocationPayments()
    {
        return $this->hasMany(ResuLocationPayment::className(), ['resu_payment_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuPaymentOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuPaymentOptionQuery(get_called_class());
    }
}
