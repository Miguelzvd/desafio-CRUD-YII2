<?php


use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1>
			<?php 
            if(!Yii::$app->user->getIsGuest())
            	{
            	    echo 'Bem vindo(a) '. Yii::$app->user->identity->usuario . '!';
            	}
            else {
                echo 'Bem vindo(a)!';
        	}?>

        </h1>

        <p class="lead">
        	<?php
            if(Yii::$app->user->getIsGuest())
            	{
            	    echo 'Realize o login ou se cadastre para ter total acesso aos dados';
            	}
            ?>
        </p>

        <p>
        	<?php
                if(Yii::$app->user->getIsGuest())
                	{
                	    echo Html::a('Logar', ['login'], ['class' => 'btn btn-primary']);
                	}
                else
                	{
                	    echo Html::a('Tela De Cadastros', ['usuario/index'], ['class' => 'btn btn-primary']);
                	}
            ?>
        </p>
    </div>
    
</div>
