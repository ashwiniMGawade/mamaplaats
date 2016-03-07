#!/bin/bash
database=c1mamaplaats

echo "DROP DATABASE ${database};" | mysql -uroot -proot

# Setup database
echo "CREATE USER 'c1mamaplaats'@'localhost' IDENTIFIED BY 'c1mamaplaats'" | mysql -uroot -proot
echo "CREATE DATABASE ${database}" | mysql -uroot -proot
echo "GRANT ALL ON $database.* TO 'c1mamaplaats'@'localhost'" | mysql -uroot -proot
echo "FLUSH PRIVILEGES" | mysql -uroot -proot