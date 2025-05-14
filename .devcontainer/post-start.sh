#!/usr/bin/bash

sudo apt update
sudo apt install libicu-dev mariadb-client -y
sudo -E docker-php-ext-install intl mysqli

# xDebug is currently not working, removing the config avoids spamming
# the terminal for now.
sudo rm /usr/local/etc/php/conf.d/xdebug.ini
mysql -u db -h db -pdb db < data/db/db.sql
sudo a2enmod rewrite
sudo chmod a+x "$(pwd)" 
sudo rm -rf /var/www/html
sudo ln -sfn /workspace/public /var/www/html

composer install
./bin/typo3 extension:setup
