<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuLocationMedia]].
 *
 * @see \common\models\ResuLocationMedia
 *
 * @deprecated 0.0.3
 * @remove 0.0.4
 */
class ResuLocationMediaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationMedia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuLocationMedia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
