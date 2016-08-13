<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuContact]].
 *
 * @see \common\models\ResuContact
 */
class ResuContactQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuContact[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuContact|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
