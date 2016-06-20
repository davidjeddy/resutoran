<?php

namespace app\modules\resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\app\modules\resutoran\common\models\ResuDecorOption]].
 *
 * @see \app\modules\resutoran\common\models\ResuDecorOption
 */
class ResuDecorOptionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\ResuDecorOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\modules\resutoran\common\models\ResuDecorOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
