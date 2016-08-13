<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuBooleanOption]].
 *
 * @see \common\models\ResuBooleanOption
 */
class ResuBooleanOptionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuBooleanOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuBooleanOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
