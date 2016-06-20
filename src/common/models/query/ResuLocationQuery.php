<?php

namespace app\modules\resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\app\modules\resutoran\common\models\ResuLocation]].
 *
 * @see \app\modules\resutoran\common\models\ResuLocation
 */
class ResuLocationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\ResuLocation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\ResuLocation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
