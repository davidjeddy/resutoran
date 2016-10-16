<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuDaysOption]].
 *
 * @see \common\models\ResuDaysOption
 */
class ResuDaysOptionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuDaysOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuDaysOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
