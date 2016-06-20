<?php

namespace app\modules\resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_services_option}}".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationService[] $resuLocationServices
 */
class ResuServiceOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_services_option}}';
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
    public function getResuLocationServices()
    {
        return $this->hasMany(ResuLocationService::className(), ['resu_services_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\query\ResuServiceOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\resutoran\common\models\query\ResuServiceOptionQuery(get_called_class());
    }
}
