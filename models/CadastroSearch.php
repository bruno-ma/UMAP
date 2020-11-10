<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cadastro;

/**
 * CadastroSearch represents the model behind the search form of `app\models\Cadastro`.
 */
class CadastroSearch extends Cadastro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rg'], 'integer'],
            [['nome', 'estado_civil', 'sexo', 'nome_da_mae', 'nome_do_pai', 'nascimento', 'nacionalidade', 'naturalidade', 'cpf', 'endereco', 'bairro', 'cidade', 'estado', 'cep', 'complemento', 'email', 'telefone', 'marca_carro', 'modelo', 'cor', 'placa', 'carro_alugado'], 'safe'],
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
        $query = Cadastro::find();

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
            'rg' => $this->rg,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'nome_da_mae', $this->nome_da_mae])
            ->andFilterWhere(['like', 'nome_do_pai', $this->nome_do_pai])
            ->andFilterWhere(['like', 'nascimento', $this->nascimento])
            ->andFilterWhere(['like', 'nacionalidade', $this->nacionalidade])
            ->andFilterWhere(['like', 'naturalidade', $this->naturalidade])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'complemento', $this->complemento])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'marca_carro', $this->marca_carro])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'cor', $this->cor])
            ->andFilterWhere(['like', 'placa', $this->placa])
            ->andFilterWhere(['like', 'carro_alugado', $this->carro_alugado]);

        return $dataProvider;
    }
}
