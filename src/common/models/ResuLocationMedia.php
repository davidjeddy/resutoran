<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_media".
 *
 * @property integer $resu_media_option_id
 * @property integer $resu_location_id
 *
 * @property ResuLocation $resuLocation
 * @property ResuMediaOption $resuMediaOption
 */
class ResuLocationMedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_media_option_id', 'resu_location_id'], 'required'],
            [['resu_media_option_id', 'resu_location_id'], 'integer'],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
            [['resu_media_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuMediaOption::className(), 'targetAttribute' => ['resu_media_option_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resu_media_option_id' => Yii::t('resu', 'Resu Media Option ID'),
            'resu_location_id' => Yii::t('resu', 'Resu Location ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuMediaOption()
    {
        return $this->hasOne(ResuMediaOption::className(), ['id' => 'resu_media_option_id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuLocationMediaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationMediaQuery(get_called_class());
    }
}
