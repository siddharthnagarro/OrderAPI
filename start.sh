#!/usr/bin/env bash

echo "***** Initializing Docker Files ***** "
docker-compose down && docker-compose up --build -d

echo "***** Installing Project Dependencies ***** "
docker-compose run composer install

echo "***** Adding permissions ***** "
docker exec orderapi_php bash -c 'chmod 777 -R /var/www/html'

echo "***** Clearing cache ***** "
docker exec orderapi_php php artisan config:cache
docker exec orderapi_php php artisan cache:clear
docker exec orderapi_php php artisan optimize:clear

echo "***** Running Migrations ***** "
docker exec orderapi_php php artisan migrate

echo "***** Running Unit test cases ***** "
docker exec orderapi_php php ./vendor/phpunit/phpunit/phpunit ./tests/Unit

echo "***** Running Feature test cases ***** "
docker exec orderapi_php php ./vendor/phpunit/phpunit/phpunit ./tests/Feature

exit 0