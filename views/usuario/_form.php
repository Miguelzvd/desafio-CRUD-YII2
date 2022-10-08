<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsuarioModel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuario-model-form">

    <?php $form = ActiveForm::begin(); ?>
    

    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>

    <br>
    
    <?= $form->field($model, 'senha')->passwordInput(['maxlength' => true]) ?>

    <br>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <br>



    <?= $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '999.999.999-99'
        ])->label(null, ['class' => 'form-label'])?>

    <br>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <br>

    <?= $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '(99) 99999-9999'
        ])->label(null, ['class' => 'form-label'])?>
    
    <br>
    
    <?= $form->field($model, 'foto')->fileInput() ?>

    <br>

    <?= $form->field($model, 'data_nascimento')->widget(\yii\widgets\MaskedInput::className(), [
        'clientOptions' => [
            'alias' => 'dd/mm/yyyy',
            'separator' => "/",
        ],
        'mask' => '1/2/y',
        'options' => [
            'placeholder' => ''
        ]
    ]
    )?>

    <br>

    <?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '99.999-999'
        ])->label(null, ['class' => 'form-label'])?>

    <br>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

	<br>

    <?= $form->field($model, 'complemento')->textInput(['maxlength' => true]) ?>

	<br>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

	<br>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

	<br>

    <?= $form->field($model, 'estado')->dropDownList([
        'ac' => 'AC',
        'ap' => 'AP',
        'am' => 'AM',
        'ba' => 'BA',
        'ce' => 'CE',
        'es' => 'ES',
        'go' => 'GO',
        'ma' => 'MA',
        'mt' => 'MT',
        'ms' => 'MS',
        'mg' => 'MG',
        'pa' => 'PA',
        'pb' => 'PB',
        'pr' => 'PR',
        'pe' => 'PE',
        'pt' => 'PI',
        'rj' => 'RJ',
        'rn' => 'RN',
        'rs' => 'RS',
        'ro' => 'RO',
        'rr' => 'RR',
        'sc' => 'SC',
        'sp' => 'SP',
        'se' => 'SE',
        'to' => 'TO',
    ],
        ['prompt' => 'Escolha um estado'])?>

	<br>

    <?= $form->field($model, 'status')->dropDownList([
        'ativo' => 'Ativo',
        'inativo' => 'Inativo'],
        ['prompt' => 'Status']) ?>

	<br>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>
	

    <?php ActiveForm::end(); ?>

</div>
