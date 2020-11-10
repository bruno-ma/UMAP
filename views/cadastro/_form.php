<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">
  <div class="panel-heading">Preencha corretamente o formulario</div>
  <div class="panel-body">
  


<div class="cadastro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'estado_civil')->dropDownList([''=> 'Selecione um ...',
    'Solteiro' => 'Solteiro (a)',
    'Casado' => 'Casado (a)', 
    'Divorciado' => 'Divorciado (a)',
    'Viuvo' => 'Viuvo (a)', 
    'Separado' => 'Separado (a)'])/*textInput(['maxlength' => true])*/ ?>


<?= $form->field($model, 'sexo')->dropDownList([''=> 'Selecione um ...',
 'Masculino' => 'Masculino',
 'Feminino' => 'Feminino',
 'Indeciso' => 'Indeciso'])/*->textInput(['maxlength' => true])*/ ?>

  


   
    
    <?= $form->field($model, 'nome_da_mae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_do_pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nascimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nacionalidade')->dropDownList([''=> 'Selecione um ...',
    'Brasileiro' => 'Brasileiro (a)',
    'Estrangeiro' => 'Estrangeiro (a)'])/*->textInput(['maxlength' => true])*/ ?>

    <?= $form->field($model, 'naturalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complemento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca_carro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'placa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carro_alugado')->dropDownList([''=> 'Selecione um ...',
    'SIM' => 'SIM',
    'NÃO' => 'NÃO'])/*->textInput(['maxlength' => true])*/ ?>




  

    
                    
       <div class="cadastro-form">
       <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
</div>