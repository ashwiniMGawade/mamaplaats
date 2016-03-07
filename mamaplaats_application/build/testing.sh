#!/usr/bin/env bash

# Variables
RELEASES_KEEP=5
RELEASES_PATH="/var/www/test.mamaplaats.nl/current/releases"
ONLINE_PATH="/var/www/test.mamaplaats.nl/current/current"
SHARED_PATH="/var/www/test.mamaplaats.nl/current/shared"
DEPLOY_PATH=$( cd $(dirname $0)/../ ; pwd -P )

echo "Moving Config Files to right spot..."
cp $DEPLOY_PATH/application/config/cache.production.php $DEPLOY_PATH/application/config/cache.php
cp $DEPLOY_PATH/application/config/settings.production.php $DEPLOY_PATH/application/config/settings.php

cp $DEPLOY_PATH/application/config/database.testing.php $DEPLOY_PATH/application/config/database.php
cp $DEPLOY_PATH/application/bootstrap.testing.php $DEPLOY_PATH/application/bootstrap.php

. $DEPLOY_PATH/build/tasks/update_git_submodules
. $DEPLOY_PATH/build/tasks/symlink_wordpress_directories
. $DEPLOY_PATH/build/tasks/symlink_shared_directories
. $DEPLOY_PATH/build/tasks/add_wordpress_permissions
. $DEPLOY_PATH/build/tasks/combine_compress_css
. $DEPLOY_PATH/build/tasks/combine_compress_js
. $DEPLOY_PATH/build/tasks/run_migrations
. $DEPLOY_PATH/build/tasks/delete_older_releases
. $DEPLOY_PATH/build/tasks/secure_staging
. $DEPLOY_PATH/build/tasks/remove_unneeded_files
. $DEPLOY_PATH/build/tasks/put_online
. $DEPLOY_PATH/build/tasks/display_finished_at