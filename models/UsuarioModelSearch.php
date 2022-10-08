<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UsuarioModel;

/**
 * UsuarioModelSearch represents the model behind the search form of `app\models\UsuarioModel`.
 */
class UsuarioModelSearch extends UsuarioModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id'], 'integer'],
            [['usuario', 'senha', 'nome', 'cpf', 'email', 'telefone',
                'foto', 'data_nascimento', 'cep', 'endereco', 'complemento',
                'bairro', 'cidade', 'estado', 'status'], 'safe'],
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
        $query = UsuarioModel::find();

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
            'usuario_id' => $this->usuario_id,
        ]);

        $query->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'senha', $this->senha])
            ->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'data_nascimento', $this->data_nascimento])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'complemento', $this->complemento])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}