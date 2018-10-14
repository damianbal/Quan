# Quan
> Q&A Platform

Simple Q&A Platform made with Laravel

Features
* User has profile which displays latest questions made or latest answers
* User can ask questions in specific categories
* User can add answer to any question
* Categories which display questions (with some statistics)
* Admin can remove any question
* User can remove own question only if it does not have any answers 

Todo
* Implement upvoting system 
* Highlight answer with most upvotes
* Allow admin to remove answers

![Quan](quan.png?raw=true "Quan")

## Installation

Clone repository or download then run those commands in terminal

Note: make sure to set Database details in .env file.

```sh
composer install
php artisan migrate
php artisan db:seed
php artisan serve # or host by Heroku?
```

If you want to modify look of app then run those commands

```sh
npm install
npm run watch
```

Then you can make changes in resources/js and resources/sass.

## Run tests

```sh
vendor/bin/phpunit
```

## Made with

* [Laravel](https://github.com/laravel/laravel)
* [Bootstrap](https://github.com/twbs/bootstrap)

## Meta

Damian Balandowski – balandowski@icloud.com

[https://github.com/damianbal](https://github.com/damianbal)

