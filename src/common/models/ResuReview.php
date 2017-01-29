<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_review}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $resu_location_id
 * @property string $value
 * @property number rating
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property \resutoran\common\models\ResuLocation $resuLocation
 */
class ResuReview extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_review}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'resu_location_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['user_id', 'resu_location_id',], 'required'],
            [['value'], 'string'],
            ['rating', 'number'],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'               => Yii::t('resutoran', 'ID'),
            'user_id'          => Yii::t('resutoran', 'User ID'),
            'resu_location_id' => Yii::t('resutoran', 'Resu Location ID'),
            'value'            => Yii::t('resutoran', 'Value'),
            'rating'           => Yii::t('resutoran', 'Rating'),
            'created_at'       => Yii::t('resutoran', 'Created At'),
            'created_by'       => Yii::t('resutoran', 'Created By'),
            'updated_at'       => Yii::t('resutoran', 'Updated At'),
            'updated_by'       => Yii::t('resutoran', 'Updated By'),
            'deleted_at'       => Yii::t('resutoran', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocation()
    {
        return $this->hasOne(\resutoran\common\models\ResuLocation::className(), ['id' => 'resu_location_id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuReviewQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuReviewQuery(get_called_class());
    }
}
