<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */

$this->title = Yii::t('app', 'Alterar Cadastro: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cadastros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cadastro-update">

<div class="cadastro-create">
<h4><div class="alert alert-info" role="alert"><?php echo ($this->title) ?></div></h4>
   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
