<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_cuisine_option}}".
 *
 * @property integer $id
 * @property string $value
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocationCuisine[] $resuLocationCuisines
 */
class ResuCuisineOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_cuisine_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['value'], 'required'],
            [['value'], 'string'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'value' => Yii::t('resutoran', 'Value'),
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
    public function getResuLocationCuisines()
    {
        return $this->hasMany(ResuLocationCuisine::className(), ['resu_cuisine_option_id' => 'id']);
    }
}
