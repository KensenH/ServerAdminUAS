FROM php:7.4.12-apache
COPY . /var/www/html

RUN apt-get update

RUN chown -R www-data:www-data /var/www
RUN chmod -R 774 /var/www

RUN apt-get install nano

COPY ./php.ini-development /usr/local/etc/php/php.ini-development
COPY ./php.ini-production /usr/local/etc/php/php.ini-production



RUN docker-php-ext-install mysqli
