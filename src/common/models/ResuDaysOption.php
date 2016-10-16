<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_days_option}}".
 *
 * @property integer $id
 * @property string $open
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 */
class ResuDaysOption extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_days_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['open', 'close'], 'required'],
            [['open', 'close'], 'string'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'open' => Yii::t('resutoran', 'Open'),
            'close' => Yii::t('resutoran', 'Close'),
            'created_at' => Yii::t('resutoran', 'Created At'),
            'created_by' => Yii::t('resutoran', 'Created By'),
            'updated_at' => Yii::t('resutoran', 'Updated At'),
            'updated_by' => Yii::t('resutoran', 'Updated By'),
            'deleted_at' => Yii::t('resutoran', 'Deleted At'),
        ];
    }
}
