<?php

namespace resutoran\common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResuDressCodeOption]].
 *
 * @see \common\models\ResuDressCodeOption
 */
class ResuDressCodeOptionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ResuDressCodeOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ResuDressCodeOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
