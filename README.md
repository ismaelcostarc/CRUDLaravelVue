# API Laravel

API em Laravel 8, com o front-end em Vue e Bootstrap.

## Instalação

Para instalar as dependências:
```
composer install
``` 

Antes de criar as tabelas modifique o arquivo .env com as configurações do seu Banco de Dados.
Ex:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelapi
DB_USERNAME=root
DB_PASSWORD=root
```

Para instalar as migrations para o Banco de Dados:
```
php artisan migrate
```

Para preencher o banco de dados com dados aleatórios de teste:
```
php artisan db:seed
```

Para rodar o servidor embutido do PHP:
```
php artisan serve
```

Para abrir a aplicação basta abrir o arquivo index.html na pasta Frontend.

## Funcionamento da API

Existem dois tipos de recursos, Users e Customers. Users são os usuários e podem modificar o recurso Customers (clientes) à vontade, mas devem estar logados. Users podem modificar apenas o usuário logado. É possível registrar novos usuários, ao registrar automaticamente o novo usuário está logado. Os endpoints retornam os dados em json. Para inserir dados por meio da API, os campos devem estar no body da requisição HTTP.

### Requisitos
    - Users
        -   name string not null
        -   email string not null
        -   password string not null
        -   image string

    - Customers
        -   name string not null
        -   medical_record string
        -   phone string
        -   cel string
        -   zipcode string
        -   address string
        -   complement string
        -   address_number string
        -   district string
        -   state string
        -   city string
        -   birth string
        -   age string
        -   gender string
        -   rg string
        -   organ_rg string
        -   cpf string

### Endpoints

| Verbo HTTP | Endpoint           | Ação                                |
|------------|--------------------|-------------------------------------|
| GET        | api                | Raiz                                |
| GET        | api/customers      | Retorna todos os clientes           |
| GET        | api/customers/{id} | Retorna o cliente informado         |
| POST       | api/customers      | Insere um novo cliente              |
| DELETE     | api/customers/{id} | Apaga um cliente                    |
| PATCH      | api/customers/{id} | Atualiza um cliente                 |
| POST       | api/login          | Realiza o login                     |
| GET        | api/logout         | Realiza o logout                    |
| POST       | api/users/register | Registra um novo usuário            |
| GET        | api/users          | Retorna os dados do usuário logado  |
| DELETE     | api/users          | Apaga o usuário logado              |
| PATCH      | api/users          | Atualiza os dados do usuário logado |


### Consumindo a API

Para evitar problemas, ao enviar requisições utilizar o header "Accept: application/json". Após logar utilizar o token retornado no Header das novas requisições para ser autenticado. Ex: "Authorization: Bearer {token}".
