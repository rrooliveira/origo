## Sobre o Projeto
    CRUD utilizando o framework Lumen (Clientes x Planos)
    
## Instalação do Projeto

    Foi utilizado o Docker para o desenvolvimento do projeto para facilitar a execução dos endpoints.
    O banco de dados será criado e alimentado nos processo de migration e seeder.
    
## Arquivo para conexão com banco de dados
    
    Antes de executar os comandos do Docker, renomeie o arquivo .env.example para .env na raiz do projeto.
    
## Usando Docker

    Digite os comandos na pasta raiz do projeto
    1 - docker-compose up -d (Comando para criar os containers)
    2 - docker-compose exec origo composer install (Comando para instalar as dependências do projeto)
    3 - docker-compose exec origo php artisan migrate (Comando para criar as tabelas)
    4 - docker-compose exec origo php artisan db:seed (Comando para alimentar as tabelas)
   
## Utilização do Sistema
    Utilize o software Postman para efetuar o consumo dos endpoints
    Na raiz do projeto possui um arquivo chamado "Endpoints.json" na qual todos os endpoints do projetos já estão criados. Basta importar no Postman e utilizar.
    URL de acesso => localhost:8083/api

## Navegação
    # Clientes
    Listagem Clientes: http://localhost:8083/api/clientes (verbo GET)
    Cadastro Clientes: http://localhost:8083/api/clientes (verbo POST)
    Atualização Clientes: http://localhost:8083/clientes/{codigoCliente} (verbo PUT)
    Deleção Clientes: http://localhost:8083/clientes/{codigoCliente} (verbo DELETE)
    
    # Plano Cliente
    Listagem Planos que o Cliente Possui: http://localhost:8083/api/clientes/{codigoCliente/planos (verbo GET)
    Cadastrar Plano para um Cliente: localhost:8083/api/clientes/planos (verbo POST)
    
    * Lembrando que a estrutura pronta dos endpoints está no arquivo "Endpoints.json" que está na raiz do projeto.    
    
    
    

