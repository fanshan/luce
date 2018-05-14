#!/bin/sh

echo "APP_PASSWORD=$APP_PASSWORD" >> .env
echo "DB_DSN=$DB_DSN" >> .env

service nginx start
service php7.2-fpm start

./vendor/bin/phinx migrate
./vendor/bin/phinx seed:run

chown -R www-data:www-data ./db/database

echo "App running on port 8080"

tail -f /var/log/nginx/error.log
