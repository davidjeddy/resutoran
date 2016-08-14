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
 * @property ResuLocationService[] $resuLocationservice
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'value' => Yii::t('app', 'value'),
            'resu_franchise_id' => Yii::t('app', 'Resu Franchise ID'),
            'resu_contact_id' => Yii::t('app', 'Resu Contact ID'),
            'resu_price_option_id' => Yii::t('app', 'Resu Price Option ID'),
            'resu_decor_option_id' => Yii::t('app', 'Resu Decor Option ID'),
            'resu_ambiance_option_id' => Yii::t('app', 'Resu Ambiance Option ID'),
            'resu_map_id' => Yii::t('app', 'Resu Map ID'),
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
        return $this->hasMany(ResuLocationDressCode::className(), ['resu_location_id' => 'id']);
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
    public function getResuLocationSeatings()
    {
        return $this->hasMany(ResuLocationSeating::className(), ['resu_location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResuLocationservice()
    {
        return $this->hasMany(ResuLocationService::className(), ['resu_location_id' => 'id']);
    }
}
