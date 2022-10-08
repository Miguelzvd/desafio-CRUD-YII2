<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\UsuarioModel $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;


$this->title = 'Login';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Preencha os campos para logar:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-11">
                <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <?= Html::a('Registrar', ['usuario/create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        
        

    <?php ActiveForm::end(); ?>

    <div class="" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
