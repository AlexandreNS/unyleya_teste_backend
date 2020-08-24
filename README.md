# Teste Unyleya - Backend

Aqui consta detalhes e instruções de execução da API do sistema de estoques de uma biblioteca.

## Pré Requisitos
Feito em Lumen 7.x utiliza como base Laravel ^7.0.
Necessario:

+ PHP >= 7.2
    + Extensão OpenSSL PHP
    + Extensão PDO PHP
    + Extensão PHP Mbstring
+ Composer
+ Mysql

Recomenda-se a instalação do Laravel também devido a execução de scripts de DB pelo artisan.
Depois é só aplicar um `composer install`

## Execução e Funcionamento

Para executar o projeto:

```bash
php -S localhost:8000 -t public
```

Para criar o Banco de Dados e popular ele:

```bash
php artisan migrate
php artisan db:seed
```

Endpoints Api

+ /api
    + get /nacionalidades/ | Listar Todos
    + get /nacionalidades/{id} | Pegar pelo Id
    + /generos
        + get / | Listar Todos
        + get /{id} | Pegar pelo Id
        + post / | Salvar
        + delete /{id} | Apagar pelo Id
        + put /{id} | Alterar registro
    + /editoras
        + get / | Listar Todos
        + get /{id} | Pegar pelo Id
        + post / | Salvar
        + delete /{id} | Apagar pelo Id
        + put /{id} | Alterar registro
    + /autores
        + get / | Listar Todos
        + get /{id} | Pegar pelo Id
        + post / | Salvar
        + delete /{id} | Apagar pelo Id
        + put /{id} | Alterar registro
    + /livros
        + post /count | Listar todos por um filtro especifico
        + get / | Listar Todos
        + get /{id} | Pegar pelo Id
        + post / | Salvar
        + delete /{id} | Apagar pelo Id
        + put /{id} | Alterar registro
