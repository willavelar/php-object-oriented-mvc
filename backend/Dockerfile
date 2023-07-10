FROM php:7.4-fpm

WORKDIR /var/www/html

RUN apt-get update \
     && docker-php-ext-install mysqli pdo pdo_mysql \
     && docker-php-ext-enable pdo_mysql

COPY . ./

CMD php -S 0.0.0.0:8080 -t .