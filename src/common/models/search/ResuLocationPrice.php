<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ResuLocationPrice as ResuLocationPriceModel;

/**
 * ResuLocationPrice represents the model behind the search form about `common\models\ResuLocationPrice`.
 */
class ResuLocationPrice extends ResuLocationPriceModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'resu_location_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'], 'integer'],
            [['low', 'high'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ResuLocationPriceModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'resu_location_id' => $this->resu_location_id,
            'low' => $this->low,
            'high' => $this->high,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
            'deleted_at' => $this->deleted_at,
        ]);

        return $dataProvider;
    }
}
