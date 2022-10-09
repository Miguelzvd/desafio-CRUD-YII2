# Ferramentas utilizadas:

-     Laragon (para criar o servidor local e criar o banco de dados)
      HeidiSQL (para o gerenciamento do banco de dados)
      Yii2 (framework)

# Gerando banco de dados:

- Deve ser criado um banco de dados chamado 'cadastros' e logo em seguida uma tabela chamada 'usuario' contendo as seguintes colunas

### COLUNAS DA TABELA 'usuario' COM SEUS RESPECTIVOS TIPOS:
-     'usuario_id': tipo int
      'usuario': tipo string
      'senha': tipo string
      'nome': tipo string
      'cpf': tipo string
      'email': tipo string
      'telefone': tipo string
      'foto': tipo string
      'data_nascimento': tipo string
      'cep': tipo string
      'endereco': tipo string
      'complemento': tipo string
      'bairro': tipo string
      'cidade': tipo string
      'estado': tipo string
      'status': tipo string
      'quem_reg': tipo string

- A diretório 'assets' contém o arquivo de criação do banco de dados e da tabela, basta executá-lo no HeidiSQL utilizando o laragon e a tabela será gerada automaticamente


# Como utilizar

- 1 - A aplicacao deve ser incializada utilizando o comando "php -S localhost:8000" no diretorio web do projeto, ou simplesmente utilizar o largon para inicializar.
- 2 - Com o projeto inicializado o usuário deve realizar um cadastro para poder logar e ter acesso ao CRUD.
- 3 - Após o cadastro realizar o login.
- 4 - Com o login realizado, o usuário terá acesso a todas a telas e ações do "CRUD".
