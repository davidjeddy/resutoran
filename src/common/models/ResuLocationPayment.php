<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_payment}}".
 *
 * @property integer $resu_payment_option_id
 * @property integer $resu_location_id
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
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
        return '{{%resu_location_payment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['resu_payment_option_id', 'resu_location_id'], 'required'],
            [['resu_payment_option_id', 'resu_location_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
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
            'resu_payment_option_id' => Yii::t('resutoran', 'Resu Payment Option ID'),
            'resu_location_id' => Yii::t('resutoran', 'Resu Location ID'),
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
}
