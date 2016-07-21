<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_location_menu".
 *
 * @property integer $resu_location_id
 * @property integer $resu_menu_option_id
 *
 * @property ResuLocation $resuLocation
 * @property ResuMenuOption $resuMenuOption
 */
class ResuLocationMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_location_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'resu_menu_option_id'], 'required'],
            [['resu_location_id', 'resu_menu_option_id'], 'integer'],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
            [['resu_menu_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuMenuOption::className(), 'targetAttribute' => ['resu_menu_option_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resu_location_id' => Yii::t('resu', 'Resu Location ID'),
            'resu_menu_option_id' => Yii::t('resu', 'Resu Menu Option ID'),
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
    public function getResuMenuOption()
    {
        return $this->hasOne(ResuMenuOption::className(), ['id' => 'resu_menu_option_id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuLocationMenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationMenuQuery(get_called_class());
    }
}
