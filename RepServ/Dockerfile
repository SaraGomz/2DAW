FROM php:8-apache

# Instala extensiones necesarias
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get clean
# descarga la imagen php:7.4.9, actualiza repositorios e instala librerias, borra y limpia cache


