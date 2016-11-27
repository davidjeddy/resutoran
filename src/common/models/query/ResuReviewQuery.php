<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ResuReview]].
 *
 * @see ResuReview
 */
class ResuReviewQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ResuReview[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ResuReview|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
