<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CadastroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'SIC - Sistema Interno de Cadastros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-index">

<div class="cadastro-create">
<h3><div class="alert alert-info" role="alert"><?php echo ($this->title) ?></div></h3>
    <p>
        <?= Html::a(Yii::t('app', 'Realizar Cadastro'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'nome',
           // 'estado_civil',
          //  'sexo',
            //'nome_da_mae',
            //'nome_do_pai',
            //'nascimento',
            //'nacionalidade',
            //'naturalidade',
            //'rg',
            'cpf',
            //'endereco',
            //'bairro',
            //'cidade',
            //'estado',
            //'cep',
            //'complemento',
            //'email:email',
            //'telefone',
            //'marca_carro',
            //'modelo',
            //'cor',
            //'placa',
            //'carro_alugado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
