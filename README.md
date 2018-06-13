<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Install Project

clone the project from github or download .zip `git clone https://github.com/OlegMarko/user-activation-and-notifications.git`

go to project root directory `cd user-activation-and-notifications`

run command `composer install`

make `.env` file like to `.env.example`

run command `php artisan key:generate`

set to `.env` file data base and mail config

run command `php artisan serve`

## Test Routes

[App](http://127.0.0.1:8000)
[Register](http://127.0.0.1:8000/register)

## Requirements

- php 7.*

- composer

- sqlite

- mail server