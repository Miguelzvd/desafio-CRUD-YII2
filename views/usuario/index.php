<?php

use app\models\UsuarioModel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UsuarioModelSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usuários';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-model-index">

	
	<h1>
    	<?php
            echo Html::encode($this->title);
    	?>
	</h1>
	
            
    <p>
        <?= Html::a('Cadastrar Novo Usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'usuario_id',
            'usuario',
            'nome',
            'cpf',
            'cep',
            //'email:email',
            //'telefone',
            //'foto',
            //'data_nascimento',
            //'endereco',
            //'complemento',
            //'bairro',
            //'cidade',
            //'estado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UsuarioModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'usuario_id' => $model->usuario_id]);
                 }
            ],
        ],
    ]); ?>

	

</div>
