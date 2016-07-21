<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_menu_option".
 *
 * @property integer $id
 * @property string $value
 *
 * @property ResuLocationMenu[] $resuLocationMenus
 */
class ResuMenuOption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_menu_option';
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
    public function getResuLocationMenus()
    {
        return $this->hasMany(ResuLocationMenu::className(), ['resu_menu_option_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuMenuOptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuMenuOptionQuery(get_called_class());
    }
}
