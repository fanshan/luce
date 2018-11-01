FROM debian:stable

RUN apt-get update && apt-get -y install apt-transport-https lsb-release ca-certificates wget curl gnupg

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'

RUN curl -sL https://deb.nodesource.com/setup_10.x | bash -

RUN apt-get update && apt-get install -y \
    git \
    nginx \
    php-fpm \
    php-mbstring \
    php-intl \
    php-sqlite3 \
    php-zip \
    php-xml \
    php-pgsql \
    nodejs

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN cp composer.phar /usr/local/bin/composer.phar
RUN chmod a+x /usr/local/bin/composer.phar

RUN npm install --global yarn

RUN rm /etc/nginx/nginx.conf
ADD ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
ADD ./docker/nginx/luce.conf /etc/nginx/sites-available/luce.conf
RUN ln -s /etc/nginx/sites-available/luce.conf /etc/nginx/sites-enabled/luce.conf

RUN rm /etc/php/7.2/fpm/pool.d/www.conf
ADD ./docker/php-fpm/www.conf /etc/php/7.2/fpm/pool.d/www.conf

ADD . /var/www/html
WORKDIR /var/www/html

RUN nginx -t

RUN composer.phar install --no-dev -o --no-ansi
RUN yarn install
RUN ./node_modules/.bin/webpack-cli
RUN rm -rf node_modules

EXPOSE 8080

# Launch the start script
CMD ["/var/www/html/docker/start.sh"]
