<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_decor_option}}".
 *
 * @property integer $id
 * @property string $value
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuDecorOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_decor_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['value'], 'required'],
            [['value'], 'string'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'value' => Yii::t('app', 'Value'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocations()
    {
        return $this->hasMany(ResuLocation::className(), ['resu_decor_option_id' => 'id']);
    }
}
