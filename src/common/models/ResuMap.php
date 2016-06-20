<?php

namespace app\modules\resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_map}}".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuMap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_map}}';
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
        return $this->hasMany(ResuLocation::className(), ['resu_map_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\query\ResuMapQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\resutoran\common\models\query\ResuMapQuery(get_called_class());
    }
}
