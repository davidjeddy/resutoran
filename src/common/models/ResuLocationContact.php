<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location_contact}}".
 *
 * @property integer $id
 * @property integer $resu_location_id
 * @property string $name
 * @property string $title
 * @property string $phone
 * @property string $email
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property \resutoran\common\models\ResuLocation $resuLocation
 */
class ResuLocationContact extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location_contact}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resu_location_id', 'name'], 'required'],
            [['resu_location_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['name', 'email'], 'string'],
            [['title'], 'string', 'max' => 43],
            [['phone'], 'string', 'max' => 15],
            [['resu_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => \resutoran\common\models\ResuLocation::className(), 'targetAttribute' => ['resu_location_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'               => Yii::t('app', 'ID'),
            'resu_location_id' => Yii::t('app', 'Resu Location ID'),
            'name'             => Yii::t('app', 'Name'),
            'title'            => Yii::t('app', 'Title'),
            'phone'            => Yii::t('app', 'Phone'),
            'email'            => Yii::t('app', 'Email'),
            'created_at'       => Yii::t('app', 'Created At'),
            'created_by'       => Yii::t('app', 'Created By'),
            'updated_at'       => Yii::t('app', 'Updated At'),
            'updated_by'       => Yii::t('app', 'Updated By'),
            'deleted_at'       => Yii::t('app', 'Deleted At'),
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
     * @return \resutoran\common\models\query\ResuLocationContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuLocationContactQuery(get_called_class());
    }
}
