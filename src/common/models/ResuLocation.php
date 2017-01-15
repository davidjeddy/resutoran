<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $resu_franchise_id

 * @property integer $resu_decor_option_id
 * @property integer $resu_ambiance_option_id
 * @property integer $resu_map_id
 *
 * @property string  address_1
 * @property string  address_2
 * @property integer resu_state_id
 * @property string business_contact_name
 * @property string business_email
 * @property string business_phone
 * @property string  phone
 * @property string  email
 *
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuAmbianceOption $resuAmbianceOption
 * @property ResuDecorOption $resuDecorOption
 * @property ResuFranchise $resuFranchise
 * @property ResuMap $resuMap
 * @property ResuLocationBoolean[] $resuLocationBooleans
 * @property ResuLocationCuisine[] $resuLocationCuisines
 * @property ResuLocationDressCode[] $resuLocationDressCodes
 * @property ResuLocationMedia[] $resuLocationMedia
 * @property ResuLocationMenu[] $resuLocationMenus
 * @property ResuLocationPayment[] $resuLocationPayments
 * @property ResuLocationSeating[] $resuLocationSeatings
 */
class ResuLocation extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_location}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['created_by', 'created_at'], 'required'], populated via behavior
            [['value'], 'required'],
            [['resu_franchise_id', 'resu_decor_option_id', 'resu_ambiance_option_id', 'resu_map_id', 'resu_state_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['value', 'email', 'business_email'], 'string', 'max' => 64],
            [['phone', 'business_phone'], 'string', 'max' => 16],
            [['business_contact_name'], 'string', 'max' => 2048],

            [['value'], 'unique'],

            [['resu_ambiance_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuAmbianceOption::className(), 'targetAttribute' => ['resu_ambiance_option_id' => 'id']],
            [['resu_decor_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuDecorOption::className(), 'targetAttribute' => ['resu_decor_option_id' => 'id']],
            [['resu_franchise_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuFranchise::className(), 'targetAttribute' => ['resu_franchise_id' => 'id']],
            [['resu_map_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuMap::className(), 'targetAttribute' => ['resu_map_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                      => Yii::t('resutoran', 'ID'),
            'value'                   => Yii::t('resutoran', 'Name'),
            'resu_franchise_id'       => Yii::t('resutoran', 'Franchise'),
            'resu_decor_option_id'    => Yii::t('resutoran', 'Decor Option'),
            'resu_ambiance_option_id' => Yii::t('resutoran', 'Ambiance Option'),
            'address_1'               => Yii::t('resutoran', 'Address 1'),
            'address_2'               => Yii::t('resutoran', 'Address 2'),
            'resu_state_id'           => Yii::t('resutoran', 'State'),
            'business_contact_name'   => Yii::t('resutoran', 'Business Contact Name'),
            'business_email'          => Yii::t('resutoran', 'Business Email'),
            'business_phone'          => Yii::t('resutoran', 'Business Phone'),
            'phone'                   => Yii::t('resutoran', 'Phone'),
            'email'                   => Yii::t('resutoran', 'Email'),
            'resu_map_id'             => Yii::t('resutoran', 'Map'),
            'created_at'              => Yii::t('resutoran', 'Created At'),
            'created_by'              => Yii::t('resutoran', 'Created By'),
            'updated_at'              => Yii::t('resutoran', 'Updated At'),
            'updated_by'              => Yii::t('resutoran', 'Updated By'),
            'deleted_at'              => Yii::t('resutoran', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuAmbianceOption()
    {
        return $this->hasOne(ResuAmbianceOption::className(), ['id' => 'resu_ambiance_option_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuDecorOption()
    {
        return $this->hasOne(ResuDecorOption::className(), ['id' => 'resu_decor_option_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuFranchise()
    {
        return $this->hasOne(ResuFranchise::className(), ['id' => 'resu_franchise_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuMap()
    {
        return $this->hasOne(ResuMap::className(), ['id' => 'resu_map_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationBooleans()
    {
        return $this->hasMany(ResuLocationBoolean::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationCuisines()
    {
        return $this->hasMany(ResuLocationCuisine::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationDressCodes()
    {
        //return $this->hasMany(ResuLocationDressCode::className(), ['resu_location_id' => 'id']);
        return $this->hasMany(ResuDressCodeOption::className(), ['id' => 'resu_dress_code_option_id'])
            ->viaTable('resu_location_dress_code', ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationHours()
    {
        return $this->hasMany(ResuLocationHours::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationMedia()
    {
        return $this->hasMany(ResuLocationMedia::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationMenus()
    {
        return $this->hasMany(ResuLocationMenu::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationPayments()
    {
        return $this->hasMany(ResuLocationPayment::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationSeating()
    {
        return $this->hasMany(ResuLocationSeating::className(), ['resu_location_id' => 'id']);
    }
}
