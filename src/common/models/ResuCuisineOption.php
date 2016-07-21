<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_cuisine_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationCuisine[] $resuLocationCuisines
 */
class ResuCuisineOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_cuisine_option';
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
    public function getResuLocationCuisines()
    {
        return $this->hasMany(ResuLocationCuisine::className(), ['resu_cuisine_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuCuisineOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuCuisineOptionQuery(get_called_class());
    }
}
