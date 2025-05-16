FROM mcr.microsoft.com/devcontainers/php:8.4
RUN sudo apt update && \
    sudo apt install -y libicu-dev mariadb-client && \
    sudo -E docker-php-ext-install intl mysqli && \
    sudo a2enmod rewrite && \
    cat <<EOF | sudo tee -a /usr/local/etc/php/conf.d/xdebug.ini
xdebug.client_host = 0.0.0.0
xdebug.log="/var/log/apache2/xdebug.log"
xdebug.idekey = VSCODE
xdebug.discover_client_host = false
xdebug.max_nesting_level = 500
EOF