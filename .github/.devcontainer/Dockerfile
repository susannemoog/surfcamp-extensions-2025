FROM mcr.microsoft.com/devcontainers/php:8.4
RUN sudo apt update && \
    sudo apt install libicu-dev mariadb-client -y && \
    sudo -E docker-php-ext-install intl && \
    sudo -E docker-php-ext-install mysqli && \
    sudo a2enmod rewrite
