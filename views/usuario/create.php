<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsuarioModel $model */

$this->title = 'Cadastrando Um Novo Usuário';
//$this->params['breadcrumbs'][] = ['label' => 'Usuario Models', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;

?>
<div class="usuario-model-create">
    
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
