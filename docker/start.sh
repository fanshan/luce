#!/bin/sh

service nginx start
service php7.2-fpm start

composer.phar install --no-dev -o
yarn install

./node_modules/.bin/webpack-cli

echo "App running on port 8080"

tail -f /var/log/nginx/error.log
