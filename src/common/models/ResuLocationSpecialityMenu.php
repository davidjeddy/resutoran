<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_speciality_menu}}".
 *
 * @property integer $resu_location_id
 * @property integer $resu_speciality_menu_option_id
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuSpecialityMenuOption $resuSpecialityMenuOption
 * @property ResuLocation $resuLocation
 */
class ResuLocationSpecialityMenu extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location_speciality_menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['resu_location_id', 'resu_speciality_menu_option_id'], 'required'],
            [['resu_location_id', 'resu_speciality_menu_option_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['resu_speciality_menu_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuSpecialityMenuOption::className(), 'targetAttribute' => ['resu_speciality_menu_option_id' => 'id']],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resu_location_id' => Yii::t('resutoran', 'Resu Location ID'),
            'resu_speciality_menu_option_id' => Yii::t('resutoran', 'Resu Speciality Men Option ID'),
            'created_at' => Yii::t('resutoran', 'Created At'),
            'created_by' => Yii::t('resutoran', 'Created By'),
            'updated_at' => Yii::t('resutoran', 'Updated At'),
            'updated_by' => Yii::t('resutoran', 'Updated By'),
            'deleted_at' => Yii::t('resutoran', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuSpecialityMenuOption()
    {
        return $this->hasOne(ResuSpecialityMenuOption::className(), ['id' => 'resu_speciality_menu_option_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(ResuLocation::className(), ['id' => 'resu_location_id']);
    }
}
