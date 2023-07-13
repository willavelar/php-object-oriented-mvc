FROM php:7.4-apache

WORKDIR /var/www/html

RUN  a2enmod rewrite \
     && docker-php-ext-install mysqli pdo pdo_mysql \
     && docker-php-ext-enable pdo_mysql

COPY . ./