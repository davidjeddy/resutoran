<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_menu_option}}".
 *
 * @property integer $id
 * @property string $value
 * @property decimal $low_price
 * @property decimal $high_price
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocationMenu[] $resuLocationMenus
 */
class ResuMenuOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_menu_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['value', 'low_price', 'high_price'], 'required'],
            [['value'], 'string'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['low_price', 'high_price'], 'number', 'numberPattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Must be currency format.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'value' => Yii::t('resutoran', 'Value'),
            'low_price' => Yii::t('resutoran', 'Low Price'),
            'high_price' => Yii::t('resutoran', 'High Price'),
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
    public function getResuLocationMenus()
    {
        return $this->hasMany(ResuLocationMenu::className(), ['resu_menu_option_id' => 'id']);
    }
}
