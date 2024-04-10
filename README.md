# CakePHP

This is a project presenting the CakePHP framework using a basic CRUD.


## Requisitos

1. HTTP Server (XAMPP);
2. Minimum PHP 8.1;
3. intl PHP extension (Habilitar em php.ini);
4. Composer.


## Instalação

composer create-project --prefer-dist cakephp/app:4.* [app_name]

> set folder permissions: Y

bin/cake server


## Criação BD

create database cakephp;

use cakephp;

create table categories (
    Id int primary key auto_increment,
    name varchar(255) null,
    created datetime not null,
    modified datetime not null
);


## Configuração BD

Dentro do arquivo config/app_local.php


'host' => 'localhost',

'username' => 'root',

'password' => '',

'database' => 'cakephp',


## Criando CRUD

bin/cake bake all Categories


## Acessando a Aplicação

http://localhost:PORT/categories
