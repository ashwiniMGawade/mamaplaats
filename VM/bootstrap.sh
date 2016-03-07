#!/usr/bin/env bash

# Update repositories before installing anything
apt-get update

source /var/tasks/install_apache_php.sh

source /var/tasks/install_mysql.sh

source /var/tasks/install_phpmyadmin.sh

source /var/tasks/install_mailcatcher.sh

source /var/tasks/configure_apache_php.sh

source /var/tasks/setup_database.sh

source /var/tasks/setup_mamaplaats.sh

# Make sure things are up and running as they should be
service apache2 restart