<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_alcohol_option}}".
 *
 * @property integer $id
 * @property string $value
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocationAlcohol[] $resuLocationAlcohols
 */
class ResuAlcoholOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_alcohol_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'created_by'], 'required'],
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
    public function getResuLocationAlcohols()
    {
        return $this->hasMany(ResuLocationAlcohol::className(), ['resu_alcohol_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ResuAlcoholOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new return new \resutoran\common\models\query\ResuAlcoholOptionQuery(get_called_class());
    }
}
