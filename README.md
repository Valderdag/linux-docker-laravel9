<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Custom Description
Кастомная сборка Docker (docker-compose) на основе оригинального репозитория [laravel/laravel](https://github.com/laravel/laravel.git) 
включает в себя всё необходимое для начала разработки приложения. 

При развертывании основного контейнера проекта скачиваются необходимые образы и запускаются контейнеры окружения: 

Nginx, Node.js, PHP-8.1.1-fpm(pdo_pgsql), PostgreSQL, Redis, Adminer, Composer. 

Для поднятия сборки достаточно клонировать репозиторий в корень проекта и запустить 

$ docker-compose up -d --build

Makefile содержит необходимые команды для работы с контейнером. 

Вызов справки $ make help

Для работы нескольких приложений в разных контейнерах нужно дать уникальные имена контейнерам окружения в docker-compose.yml

Проблема с правами на папки проекта "permission denied" решается запуском $ make set-access

При удалении образов и повторного поднятия окружения в корне проекта - убить папку  _db в storage/ иначе PostgreSQL не поднимется.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
