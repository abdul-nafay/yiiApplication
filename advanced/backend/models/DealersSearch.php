<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dealers;

/**
 * DealersSearch represents the model behind the search form about `backend\models\Dealers`.
 */
class DealersSearch extends Dealers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'name', 'mobile_No_1', 'mobile_No_2', 'landLineNo', 'email', 'nicNo', 'refferedBy', 'notes', 'address'], 'safe'],
            [['dealer_Id'], 'integer'],
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
        $query = Dealers::find();

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
            'dealer_Id' => $this->dealer_Id,
        ]);

        $query->andFilterWhere(['like', 'role', $this->role])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mobile_No_1', $this->mobile_No_1])
            ->andFilterWhere(['like', 'mobile_No_2', $this->mobile_No_2])
            ->andFilterWhere(['like', 'landLineNo', $this->landLineNo])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nicNo', $this->nicNo])
            ->andFilterWhere(['like', 'refferedBy', $this->refferedBy])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
