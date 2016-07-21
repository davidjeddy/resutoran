<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_franchise".
 *
 * @property integer $id
 * @property string $name
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuFranchise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_franchise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'id' => Yii::t('resu', 'ID'),
            'name' => Yii::t('resu', 'Name'),
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
