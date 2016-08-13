<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_cuisine}}".
 *
 * @property integer $resu_location_id
 * @property integer $resu_cuisine_option_id
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuCuisineOption $resuCuisineOption
 * @property ResuLocation $resuLocation
 */
class ResuLocationCuisine extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location_cuisine}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_cuisine_option_id', 'created_by'], 'required'],
            [['resu_location_id', 'resu_cuisine_option_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
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
            'resu_location_id' => Yii::t('app', 'Resu Location ID'),
            'resu_cuisine_option_id' => Yii::t('app', 'Resu Cuisine Option ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
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
