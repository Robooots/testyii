<?php

namespace app\Models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\Models\Takonomy;

/**
 * TakonomySearch represents the model behind the search form about `app\Models\Takonomy`.
 */
class TakonomySearch extends Takonomy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'parent_id', 'contents', 'sort_num'], 'integer'],
            [['name', 'alias', 'description'], 'safe'],
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
        $query = Takonomy::find();

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
            'type_id' => $this->type_id,
            'parent_id' => $this->parent_id,
            'contents' => $this->contents,
            'sort_num' => $this->sort_num,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
