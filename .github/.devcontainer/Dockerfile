FROM mcr.microsoft.com/devcontainers/php:8.4
RUN sudo apt update && \
    sudo apt install libicu-dev mariadb-client -y && \
    sudo -E docker-php-ext-install intl && \
    sudo -E docker-php-ext-install mysqli && \
    # xDebug is currently not working, removing the config avoids spamming
    # the terminal for now.
    sudo rm /usr/local/etc/php/conf.d/xdebug.ini && \
    sudo a2enmod rewrite