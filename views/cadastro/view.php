<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cadastros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cadastro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Alterar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Apagar'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', ' Tem certeza de que deseja excluir este item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            'estado_civil',
            'sexo',
            'nome_da_mae',
            'nome_do_pai',
            'nascimento',
            'nacionalidade',
            'naturalidade',
            'rg',
            'cpf',
            'endereco',
            'bairro',
            'cidade',
            'estado',
            'cep',
            'complemento',
            'email:email',
            'telefone',
            'marca_carro',
            'modelo',
            'cor',
            'placa',
            'carro_alugado',
        ],
    ]) ?>

</div>
