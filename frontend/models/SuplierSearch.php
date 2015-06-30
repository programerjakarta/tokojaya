<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Suplier;

/**
 * SuplierSearch represents the model behind the search form about `frontend\models\Suplier`.
 */
class SuplierSearch extends Suplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idsuplier'], 'integer'],
            [['nmsuplier'], 'safe'],
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
        $query = Suplier::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idsuplier' => $this->idsuplier,
        ]);

        $query->andFilterWhere(['like', 'nmsuplier', $this->nmsuplier]);

        return $dataProvider;
    }
}
