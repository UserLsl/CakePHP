# CakePHP
This is a project to presentation the CakePHP framework using a basic CRUD.

**Requisitos**
- HTTP Server (XAMPP);
- Minimum PHP 8.1;
- intl PHP extension (enable it in php.ini);
- Composer.

**Iniciando Projeto (Console)**
 php composer.phar create-project --prefer-dist cakephp/app:4.* [app_name]
 set folder permissions: Y
 bin/cake server

**Criar BD (SQL)**
 create database cakephp;

 use cakephp;

create table categories (
     Id int primary key auto_increment,
     name varchar(255) null,
     created datetime not null,
     modified datetime not null
 );

**Configurar o BD**
- Credenciais em config/app_local.php
-   'host' => 'localhost',
-   'username' => 'root',
-   'password' => '',
-   'database' => 'cakephp',

**Gerar CRUD (Console)**
 bin/cake bake all Categories
