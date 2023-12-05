FROM php:8.2-apache

COPY . /var/www/html

# Install PHP extension and enable it
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
