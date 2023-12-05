# Stage 1: Build the PHP application
FROM php:8.2-apache AS builder

COPY . /var/www/html

# Install PHP extension and enable it
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Stage 2: Run Java tests
FROM maven:3.8.4-openjdk-11

COPY --from=builder /var/www/html /usr/src/app

WORKDIR /usr/src/app

# Assuming your Selenium tests are Maven-based
RUN mvn test
