# Import database if one exists to be imported
if [ -f /var/sqldump/database.sql ];
then
    echo "Importing database"
    DATE=$(date +"%Y%m%d%H%M")

	source /var/tasks/setup_database.sh

    mysql -uroot -proot c1mamaplaats < /var/sqldump/database.sql
    mv /var/sqldump/database.sql /var/sqldump/$DATE-imported.sql
fi

# Start mailcatcher
mailcatcher --http-ip=192.168.56.101