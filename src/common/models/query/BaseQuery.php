<?php

namespace resutoran\common\models\query;

/**
 * This is the base ActiveQuery class for resutoran module query classes

 */
class BaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \resutoran\common\models\ResuAmbianceOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\ResuAmbianceOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
