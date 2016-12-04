<?php

namespace resutoran\common\models;

use \yii\db\ActiveRecord;

/**
 * Class ResuBase
 *
 * @package resutoran\common\models
 */
class ResuBase extends \yii\db\ActiveRecord
{
    /**
     * [behaviors description]
     *
     * @return [type] [description]
     */
    public function behaviors()
    {
        return [
            'softDeleteBehavior' => [
                'class' => \yii2tech\ar\softdelete\SoftDeleteBehavior::className(),
                'softDeleteAttributeValues' => [
                    'deleted_at' => function () { return time(); },
                ],
            ],
            'Timestamp'         => [
                'attributes'         => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'class'              => \yii\behaviors\TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value'              => function () { return time(); },
            ],
            'Blameable'         => [
                'attributes'         => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_by'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_by'],
                ],
                'class'              => \yii\behaviors\BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
                'value'              => function () { return \Yii::$app->user->getId(); },
            ],
        ];
    }


    /**
     * @inheritdoc
     * @return \resutoran\common\models\query\*Query the active query used by this AR class.
     */


    /**
     * @return mixed
     */
    public static function find()
    {
        $queryClassName = explode('\\', self::className());
        array_splice($queryClassName, 4, 0, 'query');
        $queryClassName = implode('\\', $queryClassName) . 'Query';

        if (class_exists($queryClassName)) {
            // ref: http://stackoverflow.com/questions/3797239/insert-new-item-in-array-on-any-position-in-php
            return new $queryClassName(get_called_class());
        }

        return parent::find()->andWhere([
            self::tableName().'.deleted_at' => null
        ]);
    }
}
