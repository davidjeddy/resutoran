<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_decor_option}}".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuDecorOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_decor_option}}';
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
    public function getResuLocations()
    {
        return $this->hasMany(ResuLocation::className(), ['resu_decor_option_id' => 'id']);
    }
}
