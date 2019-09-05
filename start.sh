#!/usr/bin/env bash

docker-compose down && docker-compose up --build -d

echo "===== Installing Project Dependencies ====="
docker-compose run composer install  --ignore-platform-reqs --no-interaction --no-progress --quiet

docker exec orderapi_php bash -c 'chmod 777 -R /var/www/html'

echo "===== Clearing cache and running migrations ====="
docker exec orderapi_php php artisan config:cache && php artisan cache:clear && php artisan optimize:clear

docker exec orderapi_php php artisan migrate

echo "===== Running Unit test cases ====="
docker exec orderapi_php php ./vendor/phpunit/phpunit/phpunit ./tests/Unit

echo "===== Running Feature test cases ====="
docker exec orderapi_php php ./vendor/phpunit/phpunit/phpunit ./tests/Feature

exit 0