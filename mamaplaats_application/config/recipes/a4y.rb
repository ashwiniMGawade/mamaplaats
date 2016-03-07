set :shared_children, shared_children + %w(wordpress avatars uploads cache)

#tasks
# update latest wordpress code and remove wp-content from source
#deploy tasks:
# copy latest wordpress code from shared to release
# copy config.php and wp-content to new release
# make symlinks in wp_content for avatars, uploads and cache
# finish

namespace :a4y do

  desc <<-DESC
    copy latest wordpress code from shared to release
    make symlinks in wp_content for avatars, uploads and cache
    copy config to parent dir and minify the css and js
  DESC
  task :finalize_deploy, :roles => :app do
    # mv everything to wp-content
    run "rm -rf #{latest_release}/wordpress/wp-content/uploads"
    run "rm -rf #{latest_release}/wordpress/wp-content/avatars"
    run "rm -rf #{latest_release}/application/logs"
    run "rm -rf #{latest_release}/application/cache"
    run "rm -rf #{latest_release}/uploads"
	
    # make symlinks in wp-content
    run "ln -s #{shared_path}/logs #{latest_release}/application/logs"
    run "ln -s #{shared_path}/cache #{latest_release}/application/cache"
    run "ln -s #{shared_path}/uploads #{latest_release}/uploads"
    run "ln -s #{shared_path}/wordpress/uploads #{latest_release}/wordpress/wp-content/uploads"
    run "ln -s #{latest_release}/wordpress/wp-content #{latest_release}/wp-content"
    run "ln -s #{latest_release}/wordpress/images #{latest_release}/images"

    # remove readme and install files
    run "rm -f #{latest_release}/wordpress/wp-admin/install.php"
    run "rm -f #{latest_release}/wordpress/license.txt"
    run "rm -f #{latest_release}/wordpress/readme.html"
    run "rm -f #{latest_release}/wordpress/VERSION"
    run "rm -f #{latest_release}/Capfile"
    run "rm -f #{latest_release}/wordpress/wp-config-sample.php"

    # change rights
    run "chmod 755 #{latest_release}/wordpress/wp-config.php"
    run "chmod -R 755 #{latest_release}/wordpress/wp-content/cache"
  end

  desc <<-DESC
    Set htaccess security for total site
  DESC
  task :set_security, :roles => :app do
    run "cat #{latest_release}/.auth_htaccess >> #{latest_release}/.htaccess"
  end

  desc <<-DESC
    Remove cache
  DESC
  task :rm_cache, :roles => [:web, :web02] do
    run "rm -f #{shared_path}/cache/*"
  end

  desc <<-DESC
    Compress JS and LESS.CSS
  DESC
  task :compress, :roles => [:web, :web02] do
    # compress the css/less
    run "rm -rf #{latest_release}/assets/css/style.css"
   	run "cat #{latest_release}/assets/css/bootstrap.min.css > #{latest_release}/assets/css/style.css"
   	run "cat #{latest_release}/assets/css/coupon_icons.css >> #{latest_release}/assets/css/style.css"
   	run "cat #{latest_release}/assets/js/vendor/redactor/redactor.css >> #{latest_release}/assets/css/style.css"
   	run "cat #{latest_release}/assets/js/vendor/fresco/css/fresco.css >> #{latest_release}/assets/css/style.css"
   	run "lessc -x #{latest_release}/assets/less/all.less >> #{latest_release}/assets/css/style.css"

    # compress the JS
    run "rm -rf #{latest_release}/assets/js/javascript.js"
    run "uglifyjs \
    	#{latest_release}/assets/js/jquery-1.8.3.min.js \
        #{latest_release}/assets/js/bootstrap.min.js \
        #{latest_release}/assets/js/bootstrap.maxlength.js \
        #{latest_release}/assets/js/typeahead.bloodhound.js \
        #{latest_release}/assets/js/jquery.main.js \
        #{latest_release}/assets/js/resumable.js \
        #{latest_release}/assets/js/vendor/redactor/redactor.min.js \
        #{latest_release}/assets/js/vendor/redactor/nl.js \
        #{latest_release}/assets/js/vendor/fresco/js/fresco.js \
        #{latest_release}/assets/js/vendor/knockout/knockout-3.0.0.js \
        #{latest_release}/assets/js/vendor/socialite/socialite.min.js \
        #{latest_release}/assets/js/vendor/socialite/extensions/socialite.facebook.js \
        #{latest_release}/assets/js/vendor/socialite/extensions/socialite.googleplus.js \
        #{latest_release}/assets/js/vendor/socialite/extensions/socialite.twitter.js \
        #{latest_release}/assets/js/mamaplaats/jq.reply.js \
        #{latest_release}/assets/js/mamaplaats/jq.load_more.js \
        #{latest_release}/assets/js/mamaplaats/jq.load_video.js \
        #{latest_release}/assets/js/mamaplaats/jq.follow.js \
        #{latest_release}/assets/js/mamaplaats/jq.profile.js \
        #{latest_release}/assets/js/mamaplaats/jq.social.js \
        #{latest_release}/assets/js/mamaplaats/jq.write_blog.js \
        #{latest_release}/assets/js/mamaplaats/jq.write_review.js \
        #{latest_release}/assets/js/mamaplaats/jq.search_advise.js \
        #{latest_release}/assets/js/mamaplaats/jq.newsletter.js \
        #{latest_release}/assets/js/mamaplaats/jq.coupon.js \
        #{latest_release}/assets/js/mamaplaats/jq.conversation.js \
    	-o #{latest_release}/assets/js/javascript.js"
  end

  desc <<-DESC
    Copy shared directories to local
  DESC
  task :download_shared, :roles => [:web] do
    puts run_locally("rsync --recursive --times --rsh=ssh --compress --human-readable --progress #{user}@#{domain}:#{shared_path}/uploads/. ./uploads")
    puts run_locally("rsync --recursive --times --rsh=ssh --compress --human-readable --progress #{user}@#{domain}:#{shared_path}/wordpress/uploads/. ./wordpress/wp-content/uploads")
  end

  desc <<-DESC
    Displays the 'diff' since your last deploy. This is useful if you want \
    to examine what changes are about to be deployed. Note that this might \
    not be supported on all SCM's.
  DESC
  task :diff, :roles => :app, :except => { :no_release => true } do
    system(source.local.diff(current_revision))
  end

  desc <<-DESC
    Displays the commits since your last deploy. This is good for a summary \
    of the changes that have occurred since the last deploy. Note that this \
    might not be supported on all SCM's.
  DESC
  task :commits, :roles => :app, :except => { :no_release => true } do
    from = source.next_revision(current_revision)
    system(source.local.log(from))
  end

  desc <<-DESC
    Displays the time of release finish
  DESC
  task :show_time, :roles => :app do
    run "date"
  end

  desc <<-DESC
    Activate Testing
  DESC
  task :activate_testing, :roles => :app do
    run "mv #{latest_release}/application/config/database.testing.php #{latest_release}/application/config/database.php"
    run "mv #{latest_release}/application/config/cache.testing.php #{latest_release}/application/config/cache.php"
    run "mv #{latest_release}/application/config/settings.testing.php #{latest_release}/application/config/settings.php"
    run "mv #{latest_release}/application/bootstrap.testing.php #{latest_release}/application/bootstrap.php"

    run "rm #{latest_release}/minion"
    run "mv #{latest_release}/minion.production #{latest_release}/minion"

    # run migrations
    run "#{latest_release}/minion migrations:run"
  end

  desc <<-DESC
    Activate Production
  DESC
  task :activate_production, :roles => :app do
    run "mv #{latest_release}/application/config/database.production.php #{latest_release}/application/config/database.php"
    run "mv #{latest_release}/application/config/cache.production.php #{latest_release}/application/config/cache.php"
    run "mv #{latest_release}/application/config/settings.production.php #{latest_release}/application/config/settings.php"
    run "mv #{latest_release}/application/config/email.production.php #{latest_release}/application/config/email.php"
    run "mv #{latest_release}/application/bootstrap.production.php #{latest_release}/application/bootstrap.php"

    run "rm #{latest_release}/minion"
    run "mv #{latest_release}/minion.production #{latest_release}/minion"

    # run migrations
    run "#{latest_release}/minion migrations:run"
  end
end

after 'deploy:finalize_update', 'a4y:finalize_deploy'