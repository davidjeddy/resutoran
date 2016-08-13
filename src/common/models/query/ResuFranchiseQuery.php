<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuFranchise]].
 *
 * @see \common\models\ResuFranchise
 */
class ResuFranchiseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuFranchise[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuFranchise|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
