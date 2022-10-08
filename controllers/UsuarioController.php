<?php

namespace app\controllers;

use PHPUnit\Util\Json;
use app\models\LoginForm;
use app\models\UsuarioModel;
use app\models\UsuarioModelSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UsuarioController implements the CRUD actions for UsuarioModel model.
 */
class UsuarioController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    

    /**
     * Lists all UsuarioModel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->render('error-view', [
            ]);
        }
        else {
            $searchModel = new UsuarioModelSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);
    
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    /**
     * Displays a single UsuarioModel model.
     * @param int $usuario_id Usuario ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($usuario_id)
    {
        //verifica se o usuario esta logado
        if(Yii::$app->user->isGuest){
            return $this->render('error-view', [
            ]);
        }
        else {
        return $this->render('view', [
            'model' => $this->findModel($usuario_id),
        ]);
        }
    }

    /**
     * Creates a new UsuarioModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UsuarioModel();
        $model ->foto = UploadedFile::getInstance($model, 'foto');

        // Armazena quem registrou
        if($model->quem_reg === null && !Yii::$app->user->isGuest){
            $model->quem_reg = Yii::$app->user->identity->usuario;
        }
        else{
            $model->quem_reg = null;
        }

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                if($model ->foto != null){
                    //salva o arquivo jpg no repositorio
                    $arquivo = $model->nome.'-'.$model->usuario_id;
                    $model ->foto->saveAs('repositorioDeFotos/'.$arquivo.'.'.$model->foto->extension);
                    $model ->url =  'repositorioDeFotos/'.$arquivo.'.'.$model->foto->extension;
                }
                $model ->save();
                
                return $this->redirect(['view', 'usuario_id' => $model->usuario_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UsuarioModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $usuario_id Usuario ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($usuario_id)
    {
        $model = $this->findModel($usuario_id);
        
        
        //verifica se o usuario esta logado
        if(!Yii::$app->user->isGuest){
            
            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                $model ->foto = UploadedFile::getInstance($model, 'foto');
                if($model ->foto != null){
                    //salva o arquivo jpg no repositorio do diretorio web nas pasta "repositorioDeFotos"
                    $arquivo = $model->nome.'-'.$model->usuario_id;
                    $model ->foto->saveAs('repositorioDeFotos/'.$arquivo.'.'.$model->foto->extension);
                    $model ->url =  'repositorioDeFotos/'.$arquivo.'.'.$model->foto->extension;
                }
                $model ->save();
                
                return $this->redirect(['view', 'usuario_id' => $model->usuario_id]);
            }
            
            return $this->render('update', [
                'model' => $model,
            ]);
             
        }
        
        else{
            return $this->render('error-view', [
            ]);
        }
        
    }


    /**
     * Deletes an existing UsuarioModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $usuario_id Usuario ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($usuario_id)
    {
        //verefica se o usuario esta logado
        if(!Yii::$app->user->isGuest){
            $this->findModel($usuario_id)->delete();
            
            return $this->redirect(['index']);
        }
        //redireciona para pagina de erro
        else{
            return $this->render('error-view', [
            ]);
        }
    }

    
    /**
     * Finds the UsuarioModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $usuario_id Usuario ID
     * @return UsuarioModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usuario_id)
    {
        if (($model = UsuarioModel::findOne(['usuario_id' => $usuario_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
