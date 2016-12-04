<?php

namespace resutoran\common\models;

use Yii;

/**
 * This is the model class for table "{{%resu_state}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $abbr
 *
 */
class ResuState extends \resutoran\common\models\ResuBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resu_state}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'   => Yii::t('resutoran', 'ID'),
            'name' => Yii::t('resutoran', 'Name'),
            'abbr' => Yii::t('resutoran', 'Abbreviation'),
        ];
    }
}
