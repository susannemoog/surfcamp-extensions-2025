#!/usr/bin/bash

# @todo: only run import when database is empty
# Database credentials
USER="db"
PASSWORD="db"
HOST="db"
DB="db"

echo "Waiting for MySQL to be ready..."
until mysqladmin ping -h"$HOST" -u"$USER" -p"$PASSWORD" --silent; do
  sleep 2
done

# Try only to import database in case it is empty
TABLE_COUNT=$(mysql -u"$USER" -h"$HOST" -p"$PASSWORD" -N -s -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '$DB';")
if [ "$TABLE_COUNT" -eq 0 ]; then
  echo "Importing database '$DB'"
  mysql -u"$USER" -h"$HOST" -p"$PASSWORD" "$DB" < data/db/db.sql
else
  echo "Skipping import. The database is not empty."
fi

sudo a2enmod rewrite
sudo chmod a+x "$(pwd)" 

# Symlink DocumentRoot
sudo rm -rf /var/www/html
sudo ln -sfn /workspace/public /var/www/html
