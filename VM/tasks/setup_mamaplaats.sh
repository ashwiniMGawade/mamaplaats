# Setup mamaplaats
echo "creating config files if none existent yet"
cp -n /var/www/mamaplaats_application/application/config/database.development.php /var/www/mamaplaats_application/application/config/database.php
cp -n /var/www/mamaplaats_application/application/config/settings.development.php /var/www/mamaplaats_application/application/config/settings.php
cp -n /var/www/mamaplaats_application/application/bootstrap.development.php /var/www/mamaplaats_application/application/bootstrap.php
cp -n /var/www/mamaplaats_application/application/config/cache.production.php /var/www/mamaplaats_application/application/config/cache.php

echo "creating shared folders if none existent yet"
mkdir -p /var/www/mamaplaats_application/application/cache
mkdir -p /var/www/mamaplaats_application/application/logs
mkdir -p /var/www/mamaplaats_application/uploads
mkdir -p /var/www/mamaplaats_application/wordpress/wp-content/uploads

echo "creating symlinks"
ln -s /var/www/mamaplaats_application/wordpress/wp-content/uploads/ /var/www/mamaplaats_application/uploads/legacy