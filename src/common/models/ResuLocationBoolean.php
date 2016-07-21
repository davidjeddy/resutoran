<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_boolean".
 *
 * @property integer $resu_location_id
 * @property integer $resu_boolean_option_id
 *
 * @property ResuBooleanOption $resuBooleanOption
 * @property ResuLocation $resuLocation
 */
class ResuLocationBoolean extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_boolean';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_boolean_option_id'], 'required'],
            [['resu_location_id', 'resu_boolean_option_id'], 'integer'],
            [['resu_boolean_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuBooleanOption::className(), 'targetAttribute' => ['resu_boolean_option_id' => 'id']],
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
            'resu_boolean_option_id' => Yii::t('resu', 'Resu Boolean Option ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuBooleanOption()
    {
        return $this->hasOne(ResuBooleanOption::className(), ['id' => 'resu_boolean_option_id']);
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
     * @return \resutoran\common\models\query\ResuLocationBooleanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationBooleanQuery(get_called_class());
    }
}
