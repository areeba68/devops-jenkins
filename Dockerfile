FROM php:8.2-apache

# Install OpenJDK and essential build tools
RUN apt-get update && \
    apt-get install -y openjdk-11-jdk build-essential

COPY . /var/www/html

# Install PHP extension and enable it
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

