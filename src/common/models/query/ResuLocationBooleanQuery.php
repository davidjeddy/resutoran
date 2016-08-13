<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuLocationBoolean]].
 *
 * @see \common\models\ResuLocationBoolean
 */
class ResuLocationBooleanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationBoolean[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationBoolean|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
