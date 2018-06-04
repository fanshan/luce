#!/bin/sh

echo "APP_PASSWORD='$APP_PASSWORD'" >> .env
echo "DB_LOCAL_DSN=$DB_DSN" >> .env
echo "DB_REMOTE_DSN=pgsql:host=$POSTGRESQL_ADDON_HOST;port=$POSTGRESQL_ADDON_PORT;dbname=$POSTGRESQL_ADDON_DB;user=$POSTGRESQL_ADDON_USER;password=$POSTGRESQL_ADDON_PASSWORD" >> .env
echo "POSTGRESQL_ADDON_DB=$POSTGRESQL_ADDON_DB"
echo "POSTGRESQL_ADDON_HOST=$POSTGRESQL_ADDON_HOST"
echo "POSTGRESQL_ADDON_PASSWORD=$POSTGRESQL_ADDON_PASSWORD"
echo "POSTGRESQL_ADDON_PORT=$POSTGRESQL_ADDON_PORT"
echo "POSTGRESQL_ADDON_USER=$POSTGRESQL_ADDON_USER"

service nginx start
service php7.2-fpm start

./vendor/bin/phinx migrate -e local
./vendor/bin/phinx seed:run -e local

chown -R www-data:www-data ./db/database

echo "App running on port 8080"

tail -f /var/log/nginx/error.log
