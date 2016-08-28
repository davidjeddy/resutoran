<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_contact}}".
 *
 * @property integer $id
 * @property integer $country_code
 * @property integer $phone1
 * @property integer $phone2
 * @property integer $phone3
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $country
 * @property string $city
 * @property string $prov
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuContact extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_contact}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['value', 'country_code', 'phone1'], 'required'],
            [['country_code', 'phone1', 'phone2', 'phone3', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['address1', 'address2', 'address3', 'country', 'city'], 'string'],
            [['prov'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'           => Yii::t('resutoran', 'ID'),
            'value'        => Yii::t('resutoran', 'Value'),
            'country_code' => Yii::t('resutoran', 'Country Code'),
            'phone1'       => Yii::t('resutoran', 'Phone1'),
            'phone2'       => Yii::t('resutoran', 'Phone2'),
            'phone3'       => Yii::t('resutoran', 'Phone3'),
            'address1'     => Yii::t('resutoran', 'Address1'),
            'address2'     => Yii::t('resutoran', 'Address2'),
            'address3'     => Yii::t('resutoran', 'Address3'),
            'country'      => Yii::t('resutoran', 'Country'),
            'city'         => Yii::t('resutoran', 'City'),
            'prov'         => Yii::t('resutoran', 'Prov'),
            'created_at'   => Yii::t('resutoran', 'Created At'),
            'created_by'   => Yii::t('resutoran', 'Created By'),
            'updated_at'   => Yii::t('resutoran', 'Updated At'),
            'updated_by'   => Yii::t('resutoran', 'Updated By'),
            'deleted_at'   => Yii::t('resutoran', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocations()
    {
        return $this->hasMany(ResuLocation::className(), ['resu_contact_id' => 'id']);
    }
}
