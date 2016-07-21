<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_dress_code".
 *
 * @property integer $resu_location_id
 * @property integer $resu_dress_code_option_id
 *
 * @property ResuDressCodeOption $resuDressCodeOption
 * @property ResuLocation $resuLocation
 */
class ResuLocationDressCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_dress_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_dress_code_option_id'], 'required'],
            [['resu_location_id', 'resu_dress_code_option_id'], 'integer'],
            [['resu_dress_code_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuDressCodeOption::className(), 'targetAttribute' => ['resu_dress_code_option_id' => 'id']],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resu_location_id' => Yii::t('resu', 'Resu Location ID'),
            'resu_dress_code_option_id' => Yii::t('resu', 'Resu Dress Code Option ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuDressCodeOption()
    {
        return $this->hasOne(ResuDressCodeOption::className(), ['id' => 'resu_dress_code_option_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuLocationDressCodeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationDressCodeQuery(get_called_class());
    }
}
