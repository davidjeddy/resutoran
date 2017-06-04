<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[ResuLocationPrice]].
 *
 * @see ResuLocationPrice
 *
 * @deprecated 0.0.3
 */
class ResuLocationPriceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \resutoran\common\models\ResuLocationPrice[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \resutoran\common\models\ResuLocationPrice|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
