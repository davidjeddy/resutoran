<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery Base class
 *
 * @see \common\models\BaseQuery
 */
class BaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuAmbianceOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuAmbianceOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
