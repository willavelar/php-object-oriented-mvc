FROM php:7.4-cli-alpine

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql mysqli && \
    docker-php-ext-enable mysqli

COPY . ./

CMD php -S 0.0.0.0:8080 -t .