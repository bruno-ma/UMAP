<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */

/*$this->title = Yii::t('app', 'Realizar1 Cadastro'); ESTILO ALTERADO*/ 


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cadastros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="cadastro-create">
<h3><div class="alert alert-info" role="alert"><?php echo ($this->title) ?></div></h3>

Alterado o estilo da Página

-->


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
