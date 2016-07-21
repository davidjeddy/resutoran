<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_cuisine".
 *
 * @property integer $resu_location_id
 * @property integer $resu_cuisine_option_id
 *
 * @property ResuCuisineOption $resuCuisineOption
 * @property ResuLocation $resuLocation
 */
class ResuLocationCuisine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_cuisine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_cuisine_option_id'], 'required'],
            [['resu_location_id', 'resu_cuisine_option_id'], 'integer'],
            [['resu_cuisine_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuCuisineOption::className(), 'targetAttribute' => ['resu_cuisine_option_id' => 'id']],
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
            'resu_cuisine_option_id' => Yii::t('resu', 'Resu Cuisine Option ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuCuisineOption()
    {
        return $this->hasOne(ResuCuisineOption::className(), ['id' => 'resu_cuisine_option_id']);
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
     * @return \resutoran\common\models\query\ResuLocationCuisineQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationCuisineQuery(get_called_class());
    }
}
