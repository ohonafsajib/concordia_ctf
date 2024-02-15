FROM php:8.1-apache

USER root

RUN apt-get update \
    && apt-get install -y sudo bash iputils-ping \
    && docker-php-ext-install mysqli pdo pdo_mysql

USER www-data