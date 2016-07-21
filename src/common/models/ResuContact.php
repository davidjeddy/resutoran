<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "resu_contact".
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
 *
 * @property ResuLocation[] $resuLocations
 */
class ResuContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resu_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_code', 'phone1'], 'required'],
            [['country_code', 'phone1', 'phone2', 'phone3'], 'integer'],
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
            'id' => Yii::t('resu', 'ID'),
            'country_code' => Yii::t('resu', 'Country Code'),
            'phone1' => Yii::t('resu', 'Phone1'),
            'phone2' => Yii::t('resu', 'Phone2'),
            'phone3' => Yii::t('resu', 'Phone3'),
            'address1' => Yii::t('resu', 'Address1'),
            'address2' => Yii::t('resu', 'Address2'),
            'address3' => Yii::t('resu', 'Address3'),
            'country' => Yii::t('resu', 'Country'),
            'city' => Yii::t('resu', 'City'),
            'prov' => Yii::t('resu', 'Prov'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocations()
    {
        return $this->hasMany(ResuLocation::className(), ['resu_contact_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\ResuContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \resutoran\common\models\query\ResuContactQuery(get_called_class());
    }
}
