<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_service_option}}".
 *
 * @property integer $id
 * @property string $value
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocationService[] $resuLocationservice
 */
class ResuserviceOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_service_option}}';
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
    public function getResuLocationservice()
    {
        return $this->hasMany(ResuLocationService::className(), ['resu_service_option_id' => 'id']);
    }
}
