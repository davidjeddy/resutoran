<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_location}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $resu_franchise_id
 * @property integer $resu_contact_id
 * @property integer $resu_price_option_id
 * @property integer $resu_decor_option_id
 * @property integer $resu_ambiance_option_id
 * @property integer $resu_map_id
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $deleted_at
 *
 * @property ResuAmbianceOption $resuAmbianceOption
 * @property ResuContact $resuContact
 * @property ResuDecorOption $resuDecorOption
 * @property ResuFranchise $resuFranchise
 * @property ResuMap $resuMap
 * @property ResuPriceOption $resuPriceOption
 * @property ResuLocationBoolean[] $resuLocationBooleans
 * @property ResuLocationCuisine[] $resuLocationCuisines
 * @property ResuLocationDressCode[] $resuLocationDressCodes
 * @property ResuLocationHours[] $resuLocationHours
 * @property ResuLocationMedia[] $resuLocationMedia
 * @property ResuLocationMenu[] $resuLocationMenus
 * @property ResuLocationPayment[] $resuLocationPayments
 * @property ResuLocationReservation[] $resuLocationReservations
 * @property ResuLocationSeating[] $resuLocationSeatings
 * @property ResuLocationService[] $resuLocationService
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
            [['value', 'resu_franchise_id', 'resu_contact_id', 'resu_price_option_id', 'resu_decor_option_id', 'resu_ambiance_option_id', 'resu_map_id'], 'required'],
            [['resu_franchise_id', 'resu_contact_id', 'resu_price_option_id', 'resu_decor_option_id', 'resu_ambiance_option_id', 'resu_map_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['value'], 'string', 'max' => 64],
            [['resu_ambiance_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuAmbianceOption::className(), 'targetAttribute' => ['resu_ambiance_option_id' => 'id']],
            [['resu_contact_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuContact::className(), 'targetAttribute' => ['resu_contact_id' => 'id']],
            [['resu_decor_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuDecorOption::className(), 'targetAttribute' => ['resu_decor_option_id' => 'id']],
            [['resu_franchise_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuFranchise::className(), 'targetAttribute' => ['resu_franchise_id' => 'id']],
            [['resu_map_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuMap::className(), 'targetAttribute' => ['resu_map_id' => 'id']],
            [['resu_price_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResuPriceOption::className(), 'targetAttribute' => ['resu_price_option_id' => 'id']],
            [['value'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resutoran', 'ID'),
            'value' => Yii::t('resutoran', 'Name'),
            'resu_franchise_id' => Yii::t('resutoran', 'Franchise'),
            'resu_contact_id' => Yii::t('resutoran', 'Contact'),
            'resu_price_option_id' => Yii::t('resutoran', 'Price Option'),
            'resu_decor_option_id' => Yii::t('resutoran', 'Decor Option'),
            'resu_ambiance_option_id' => Yii::t('resutoran', 'Ambiance Option'),
            'resu_map_id' => Yii::t('resutoran', 'Map'),
            'created_at' => Yii::t('resutoran', 'Created At'),
            'created_by' => Yii::t('resutoran', 'Created By'),
            'updated_at' => Yii::t('resutoran', 'Updated At'),
            'updated_by' => Yii::t('resutoran', 'Updated By'),
            'deleted_at' => Yii::t('resutoran', 'Deleted At'),
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
    public function getResuContact()
    {
        return $this->hasOne(ResuContact::className(), ['id' => 'resu_contact_id']);
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
    public function getResuPriceOption()
    {
        return $this->hasOne(ResuPriceOption::className(), ['id' => 'resu_price_option_id']);
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
    public function getResuLocationReservations()
    {
        return $this->hasMany(ResuLocationReservation::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationSeating()
    {
        return $this->hasMany(ResuLocationSeating::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationService()
    {
        //return $this->hasMany(ResuServiceDressCode::className(), ['resu_service_id' => 'id']);
        return $this->hasMany(ResuServiceOption::className(), ['id' => 'resu_service_option_id'])
            ->viaTable('resu_location_service', ['resu_location_id' => 'id']);
    }
}
