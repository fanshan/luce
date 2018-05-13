#!/bin/sh

service nginx start
service php7.2-fpm start

./vendor/bin/phinx migrate
./vendor/bin/phinx seed:run

echo "App running on port 8080"

tail -f /var/log/nginx/error.log
