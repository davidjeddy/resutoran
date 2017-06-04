<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_price}}".
 *
 * @property integer $id
 * @property integer $resu_location_id
 * @property string $low
 * @property string $high
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 */
class ResuLocationPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location_price}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'created_at', 'created_by'], 'required'],
            [['resu_location_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['low', 'high'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'resu_location_id' => Yii::t('resutoran', 'Resu Location ID'),
            'low' => Yii::t('resutoran', 'Low'),
            'high' => Yii::t('resutoran', 'High'),
            'created_at' => Yii::t('resutoran', 'Created At'),
            'created_by' => Yii::t('resutoran', 'Created By'),
            'updated_at' => Yii::t('resutoran', 'Updated At'),
            'updated_by' => Yii::t('resutoran', 'Updated By'),
            'deleted_at' => Yii::t('resutoran', 'Deleted At'),
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ResuLocationPriceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ResuLocationPriceQuery(get_called_class());
    }
}
