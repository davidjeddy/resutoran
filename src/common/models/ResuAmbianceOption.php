<?php

namespace app\modules\resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_ambiance_option}}".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuAmbianceOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_ambiance_option}}';
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
        return $this->hasMany(ResuLocation::className(), ['resu_ambiance_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\query\ResuAmbianceOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\resutoran\common\models\query\ResuAmbianceOptionQuery(get_called_class());
    }
}
