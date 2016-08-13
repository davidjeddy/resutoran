<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuLocationPayment]].
 *
 * @see \common\models\ResuLocationPayment
 */
class ResuLocationPaymentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationPayment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationPayment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
