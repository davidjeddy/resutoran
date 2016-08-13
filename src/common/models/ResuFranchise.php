<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_franchise}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuFranchise extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_franchise}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_by'], 'required'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
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
        return $this->hasMany(ResuLocation::className(), ['resu_franchise_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuFranchiseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuFranchiseQuery(get_called_class());
    }
}
