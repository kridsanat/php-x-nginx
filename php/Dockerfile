FROM php:7.4-fpm-alpine


RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt update -y && apt upgrade -y
