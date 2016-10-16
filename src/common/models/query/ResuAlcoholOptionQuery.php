<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[ResuAlcoholOption]].
 *
 * @see ResuAlcoholOption
 */
class ResuAlcoholOptionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ResuAlcoholOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ResuAlcoholOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
