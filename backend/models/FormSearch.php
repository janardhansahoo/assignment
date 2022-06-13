<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Form;

/**
 * FormSearch represents the model behind the search form of `backend\models\Form`.
 */
class FormSearch extends Form
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'noofpeople', 'applicationno'], 'integer'],
            [['name', 'phone', 'aadhar', 'fromstate', 'fromdistrict', 'tostate', 'todistrict', 'traveldatefrom', 'traveldateto', 'viastate1', 'viastate2', 'viastate3', 'status'], 'safe'],
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
        $query = Form::find();

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
            'noofpeople' => $this->noofpeople,
            'traveldatefrom' => $this->traveldatefrom,
            'traveldateto' => $this->traveldateto,
            'applicationno' => $this->applicationno,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'aadhar', $this->aadhar])
            ->andFilterWhere(['like', 'fromstate', $this->fromstate])
            ->andFilterWhere(['like', 'fromdistrict', $this->fromdistrict])
            ->andFilterWhere(['like', 'tostate', $this->tostate])
            ->andFilterWhere(['like', 'todistrict', $this->todistrict])
            ->andFilterWhere(['like', 'viastate1', $this->viastate1])
            ->andFilterWhere(['like', 'viastate2', $this->viastate2])
            ->andFilterWhere(['like', 'viastate3', $this->viastate3])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
