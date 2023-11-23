# Laravel Studies
Esse repositório contém um protótipo da ideia Saferoad desenvolvida na EXPOLOG Hack 2023
## Conteúdos

- [Instalação](#instalação)
- [Uso](#uso)

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/pattchvs/saferoad.git
```


3. Instalar [PHP e MySQL](https://www.apachefriends.org/pt_br/download.html)


4. Instalar [Composer](https://getcomposer.org/download/)

5. Start MySQL

6. Instalar todas as dependencias do projeto
```bash
composer install
```

7. Atualizar o arquivo .env e gerar chave bash
```bash
php artisan key:generate
```

## -------------------------------------------------------
# Dados do banco

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=saferoad

DB_USERNAME=root

DB_PASSWORD=

## -------------------------------------------------------
8. Executar as migrations
```bash
php artisan migrate
```

9. Iniciar o servidor de desenvolvimento
```bash
php artisan serve
```

## Uso

1. Inicie a aplicação seguindo os passos de [instalação](#instalação)
2. O aplicativo vai ficar acessivel em http://localhost:8000 para a visão da empresa e http://localhost:8000/driver para a visão do motorista.


## Database
Esse projeto usa MySQL de database. As migrations necessarias são realizadas usando Laravel.

Para [instalar MySQL](https://www.apachefriends.org/pt_br/download.html) você pode usar esse link.

