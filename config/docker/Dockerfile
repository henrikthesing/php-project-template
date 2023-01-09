FROM php:8.2-apache

ENV APACHE_RUN_USER dev

RUN adduser --uid 1000 --disabled-password dev \
 && chown -R "$APACHE_RUN_USER:$APACHE_RUN_GROUP" /var/lock/apache2 /var/run/apache2

RUN apt-get update \
 && apt-get install -y git libzip-dev \
 && docker-php-ext-install zip pdo pdo_mysql \
 && a2enmod rewrite \
 && sed -i 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/000-default.conf \
 && mv /var/www/html /var/www/public \
 && curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer


RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN touch /usr/local/etc/php/conf.d/xdebug.ini; \
  echo xdebug.mode=debug >> /usr/local/etc/php/conf.d/xdebug.ini; \
  echo xdebug.start_with_request=yes >> /usr/local/etc/php/conf.d/xdebug.ini; \
  echo xdebug.client_port=9003 >> /usr/local/etc/php/conf.d/xdebug.ini; \
  echo xdebug.log=/tmp/php8-xdebug.log >> /usr/local/etc/php/conf.d/xdebug.ini; \
  echo xdebug.client_host=192.168.200.1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
  echo xdebug.idekey="DEBUG" >> /usr/local/etc/php/conf.d/xdebug.ini;

WORKDIR /var/www
