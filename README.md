# Laravel Mock Project on Docker
laravel mock

## Installation
```shell
$ brew install docker-compose
```  

## Launch Project
### Local Env
```shell
COMPOSE_FILE=docker-compose.local.yml docker-compose up --build
```

## Script
### Database Seeding
```shell
docker-compose run web-server php artisan db:seed
```

## Diff
this is diff at master branch

### こいつをロールバックする
