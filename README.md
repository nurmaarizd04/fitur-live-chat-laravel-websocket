<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## live chat sample, dengan mengunakan laravel websocktet dan pusher.js

## get started

## How to install

-   install laravel version -9

```bash
composer create-project laravel/laravel:^9.0 example-app
```

-   make env

```bash
cp .env.example .env and settings database
```

-   generate key

```bash
php artisan key:generate
```

-   install laravel websockter

```bash
composer require beyondcode/laravel-websockets
```

-   publish the migration file using:

```bash
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
```

-   generete databse

```bash
php artisan migrate
```

-   next, you need to publish the WebSocket configuration file:

```bash
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
```

-   now install pusher-js -> anda perlu daftar dulu https://pusher.com/docs/channels/getting_started/javascript/ |h ttps://dashboard.pusher.com/, untuk mendapatkan acces key

```bash
npm install pusher-js
```

-   next install composer

```bash
require pusher/pusher-php-server
```

## Run project

-   start server

```bash
php artisan serve
```

-   start websocket

```bash
php artisan websockets:serve
```

## NOTE

-   https://github.com/guzzle/guzzle/issues/1935
-   https://stackoverflow.com/questions/42094842/curl-error-60-ssl-certificate-in-laravel-5-4
