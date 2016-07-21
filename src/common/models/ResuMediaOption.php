<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_media_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationMedia[] $resuLocationMedia
 */
class ResuMediaOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_media_option';
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
    public function getResuLocationMedia()
    {
        return $this->hasMany(ResuLocationMedia::className(), ['resu_media_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuMediaOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuMediaOptionQuery(get_called_class());
    }
}
