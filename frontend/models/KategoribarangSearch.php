<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Kategoribarang;

/**
 * KategoribarangSearch represents the model behind the search form about `frontend\models\Kategoribarang`.
 */
class KategoribarangSearch extends Kategoribarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idkategoribarang'], 'integer'],
            [['kategoribarang'], 'safe'],
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
        $query = Kategoribarang::find();

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
            'idkategoribarang' => $this->idkategoribarang,
        ]);

        $query->andFilterWhere(['like', 'kategoribarang', $this->kategoribarang]);

        return $dataProvider;
    }
}
