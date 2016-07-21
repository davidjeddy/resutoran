<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_dress_code_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationDressCode[] $resuLocationDressCodes
 */
class ResuDressCodeOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_dress_code_option';
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
    public function getResuLocationDressCodes()
    {
        return $this->hasMany(ResuLocationDressCode::className(), ['resu_dress_code_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuDressCodeOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuDressCodeOptionQuery(get_called_class());
    }
}
