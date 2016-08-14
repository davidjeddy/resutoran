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
    public static function find()
    {
        // cnPathArray = className path as an array
        $cnPathArray = explode('\\', self::className());

        // source http://stackoverflow.com/questions/3353745/how-to-insert-element-into-arrays-at-specific-position
        $modelClass = array_slice($cnPathArray, 0, count($cnPathArray) - 1, true)
            + [count($cnPathArray) => 'query']
            + array_slice($cnPathArray, 0, count($cnPathArray) + 1, true);

        $modelClass = '\\' . implode('\\', $modelClass) . 'Query';

        return new $modelClass(get_called_class());
    }
}
