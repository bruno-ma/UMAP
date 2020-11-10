<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro".
 *
 * @property int $id
 * @property string $nome
 * @property string $estado_civil
 * @property string $sexo
 * @property string $nome_da_mae
 * @property string $nome_do_pai
 * @property string $nascimento
 * @property string $nacionalidade
 * @property string $naturalidade
 * @property int $rg
 * @property string $cpf
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $complemento
 * @property string|null $email
 * @property string $telefone
 * @property string $marca_carro
 * @property string $modelo
 * @property string $cor
 * @property string $placa
 * @property string|null $carro_alugado
 */
class Cadastro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cadastro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'estado_civil', 'sexo', 'nome_da_mae', 'nome_do_pai', 'nascimento', 'nacionalidade', 'naturalidade', 'rg', 'cpf', 'endereco', 'bairro', 'cidade', 'estado', 'cep', 'complemento', 'telefone', 'marca_carro', 'modelo', 'cor', 'placa'], 'required'],
            [['rg'], 'integer'],
            [['nome', 'nome_da_mae', 'nome_do_pai', 'complemento', 'email'], 'string', 'max' => 255],
            [['estado_civil', 'sexo', 'cep', 'cor', 'placa'], 'string', 'max' => 20],
            [['nascimento', 'cpf'], 'string', 'max' => 30],
            [['nacionalidade', 'naturalidade', 'estado', 'carro_alugado'], 'string', 'max' => 50],
            [['endereco', 'bairro', 'cidade'], 'string', 'max' => 100],
            [['telefone', 'marca_carro', 'modelo'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
            'estado_civil' => Yii::t('app', 'Estado Civil'),
            'sexo' => Yii::t('app', 'Sexo'),
            'nome_da_mae' => Yii::t('app', 'Nome Da Mae'),
            'nome_do_pai' => Yii::t('app', 'Nome Do Pai'),
            'nascimento' => Yii::t('app', 'Nascimento'),
            'nacionalidade' => Yii::t('app', 'Nacionalidade'),
            'naturalidade' => Yii::t('app', 'Naturalidade'),
            'rg' => Yii::t('app', 'Rg'),
            'cpf' => Yii::t('app', 'Cpf'),
            'endereco' => Yii::t('app', 'Endereco'),
            'bairro' => Yii::t('app', 'Bairro'),
            'cidade' => Yii::t('app', 'Cidade'),
            'estado' => Yii::t('app', 'Estado'),
            'cep' => Yii::t('app', 'Cep'),
            'complemento' => Yii::t('app', 'Complemento'),
            'email' => Yii::t('app', 'E-mail'),
            'telefone' => Yii::t('app', 'Telefone'),
            'marca_carro' => Yii::t('app', 'Marca do Carro'),
            'modelo' => Yii::t('app', 'Modelo'),
            'cor' => Yii::t('app', 'Cor'),
            'placa' => Yii::t('app', 'Placa'),
            'carro_alugado' => Yii::t('app', 'Carro Alugado?'),
        ];
    }
}
