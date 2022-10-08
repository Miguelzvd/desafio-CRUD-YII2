<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsuarioModel $model */

$this->title = 'Update Usuario Model: ' . $model->usuario_id;
// $this->params['breadcrumbs'][] = ['label' => 'Usuario Models', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->usuario_id, 'url' => ['view', 'usuario_id' => $model->usuario_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-model-update">
	<p>
    	<?php 
            if(!Yii::$app->user->getIsGuest())
            {
                echo Html::a('Voltar', ['index'], ['class' => 'btn btn-primary']);
            }
            else {
                echo Html::a('Voltar', ['site/login'], ['class' => 'btn btn-primary']) ;
            }
        ?>
    </p>
    
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
