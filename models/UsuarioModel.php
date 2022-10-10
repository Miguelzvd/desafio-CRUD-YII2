<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "usuario".
 *
 * @property int $usuario_id
 * @property string $usuario
 * @property string $senha
 * @property string $nome
 * @property string $cpf
 * @property string $email
 * @property string $telefone
 * @property string|null $foto
 * @property string $data_nascimento
 * @property string $cep
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $status
 * @property string $quem_reg
 */
class UsuarioModel extends \yii\db\ActiveRecord
{
    public $url;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario', 'senha', 'nome', 'email', 'telefone', 'data_nascimento', 'cep',
                'endereco', 'complemento', 'bairro','status', 'cpf'], 'required'],
            [['usuario', 'nome', 'senha', 'status','quem_reg'], 'string', 'max' => 50],
            [['email', 'url', 'endereco', 'complemento', 'bairro', 'cidade'], 'string', 'max' => 255],
            [['url'], 'file'],
            ['email', 'email'],
            ['usuario','unique', 'message' => 'O nome de usuário já existe'],
            ['telefone','unique', 'message' => 'O número de telefone já está sendo utilizado'],
            [['nome', 'bairro', 'cidade', 'endereco'], 'match', 'pattern' => '/^[A-z- ]+$/'],
            [['cpf'], 'string', 'max' => 14],
            [['data_nascimento'], 'string', 'min'=>10, 'max'=>10],
            [['cep'], 'string', 'min' => 10 ,'max' => 10],
            [['estado'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'usuario' => 'Usuario',
            'senha' => 'Senha',
            'nome' => 'Nome',
            'cpf' => 'CPF',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'foto' => 'Foto',
            'data_nascimento' => 'Data Nascimento',
            'cep' => 'CEP',
            'endereco' => 'Endereço',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'status' => 'Status',
            'quem_reg' => 'Quem Registrou'
        ];
    }

}
