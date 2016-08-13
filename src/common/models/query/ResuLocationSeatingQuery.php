<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuLocationSeating]].
 *
 * @see \common\models\ResuLocationSeating
 */
class ResuLocationSeatingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationSeating[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationSeating|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
