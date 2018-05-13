#!/bin/sh

service nginx start
service php7.2-fpm start

composer.phar install --no-dev -o --no-ansi
yarn install

./node_modules/.bin/webpack-cli
./vendor/bin/phinx migrate
./vendor/bin/phinx seed:run

echo "App running on port 8080"

tail -f /var/log/nginx/error.log
