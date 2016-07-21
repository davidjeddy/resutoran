<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_boolean_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationBoolean[] $resuLocationBooleans
 */
class ResuBooleanOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_boolean_option';
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
    public function getResuLocationBooleans()
    {
        return $this->hasMany(ResuLocationBoolean::className(), ['resu_boolean_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuBooleanOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuBooleanOptionQuery(get_called_class());
    }
}
