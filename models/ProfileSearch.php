<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form of `app\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'userid'], 'integer'],
            [['fullName', 'dateOfBirth', 'gender', 'mobilePhone', 'email', 'codeAactiveMobileSMS', 'activeMobileSMS', 'codeActiveEmail', 'activeEmail', 'activeStatus', 'note', 'language', 'relationship', 'avatar'], 'safe'],
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
        $query = Profile::find();

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
            'userid' => $this->userid,
            'dateOfBirth' => $this->dateOfBirth,
        ]);

        $query->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'mobilePhone', $this->mobilePhone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'codeAactiveMobileSMS', $this->codeAactiveMobileSMS])
            ->andFilterWhere(['like', 'activeMobileSMS', $this->activeMobileSMS])
            ->andFilterWhere(['like', 'codeActiveEmail', $this->codeActiveEmail])
            ->andFilterWhere(['like', 'activeEmail', $this->activeEmail])
            ->andFilterWhere(['like', 'activeStatus', $this->activeStatus])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'relationship', $this->relationship])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
