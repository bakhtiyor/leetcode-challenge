FROM php:8.2-fpm as main
WORKDIR /app
RUN apt-get update && apt-get install -y \
    git \
    unzip\
    libzip-dev\
    libmcrypt-dev\
    libc-client-dev\
    libxml2-dev\
    && rm -r /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Asia/Dushanbe /etc/localtime
RUN "date"

# install xdebug
RUN pecl install xdebug ;\
    rm -rf /tmp/pear ;\
    docker-php-ext-enable xdebug ;\
    echo "expose_php=Off" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;\
    echo "xdebug.log=/app/var/log/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;\
    echo "xdebug.log_level=3" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;\
    echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;\
    echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;\
    echo "xdebug.idekey=leetcode" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;