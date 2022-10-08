<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\UsuarioModel $model */

$this->title = 'Usuário: '.$model->usuario;
\yii\web\YiiAsset::register($this);
?>
<div class="usuario-model-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    	<?= Html::a('Voltar', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'usuario_id' => $model->usuario_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->usuario_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que quer excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usuario_id',
            'usuario',
            'senha',
            'nome',
            'cpf',
            'email:email',
            'telefone',
            'foto',
            'data_nascimento',
            'cep',
            'endereco',
            'complemento',
            'bairro',
            'cidade',
            'estado',
            'status',
            'quem_reg',
        ],
    ]) ?>

</div>
