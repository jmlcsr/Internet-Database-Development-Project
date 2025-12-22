<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteStats;

/**
 * SiteStatsSearch represents the model behind the search form of `common\models\SiteStats`.
 */
class SiteStatsSearch extends SiteStats
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'stat_value'], 'integer'],
            [['stat_name', 'stat_type'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = SiteStats::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'stat_value' => $this->stat_value,
        ]);

        $query->andFilterWhere(['like', 'stat_name', $this->stat_name])
            ->andFilterWhere(['like', 'stat_type', $this->stat_type]);

        return $dataProvider;
    }
}
