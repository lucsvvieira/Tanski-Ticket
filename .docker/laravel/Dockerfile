FROM php:8.0-fpm

WORKDIR /var/www/html

RUN apt-get update -y \
    && apt-get install libzip-dev libicu-dev libpq-dev libmcrypt-dev libonig-dev libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev vim -y \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-install \
        zip \
        mbstring \
        pdo \
        pdo_mysql \
        zip \
        opcache \
        gd

# Install xdebug
RUN pecl install xdebug-3.1.3
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_host=127.0.0.1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.coverage_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN echo "max_execution_time=60" >> /usr/local/etc/php/php.ini

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9090

CMD ["php-fpm"]
