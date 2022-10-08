<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsuarioModelSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuario-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    
    <?= $form->field($model, 'usuario') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cpf') ?>

    <?php // $form->field($model, 'senha') ?>

    <?php // $form->field($model, 'usuario_id') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'data_nascimento') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'complemento') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
