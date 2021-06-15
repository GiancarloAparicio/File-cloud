FROM php:7.4-fpm-alpine

ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN mkdir -p /var/www/html

RUN chown laravel:laravel /var/www/html

WORKDIR /var/www/html

RUN apk update \
    && apk upgrade \
    && apk add --no-cache \
        freetype \
        freetype-dev \
        libpng \
        libpng-dev \
        libjpeg \
        libjpeg-turbo \
        libjpeg-turbo-dev \
        jpeg-dev \
        libmcrypt-dev \
        libzip-dev

RUN docker-php-ext-configure gd --enable-gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/ 

RUN pecl install mcrypt-1.0.3

RUN docker-php-ext-enable mcrypt

RUN docker-php-ext-install pdo_mysql gd zip

RUN docker-php-ext-install -j$(nproc) gd
