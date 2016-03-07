set :domain, 'web01.affiliate4you.nl'
set :env, 'live'
set :deploy_to, "/var/www/www.mamaplaats.nl"
set :branch, "master"
set :sitehost, "www.mamaplaats.nl"
set :user, 'webdev'
set :group, 'webdev'
set :use_sudo, true
set :sudo_user, "webdev"  

set :git_enable_submodules, 1

#before 'deploy', 'mysql:dump'
after 'deploy:finalize_update', 'deploy:cleanup', 'a4y:activate_production', 'a4y:show_time'

role :web, "#{domain}", :primary => true, :no_release => false
role :web02, "webdev@web02.affiliate4you.nl", :no_release => true
role :web02, '', :no_release => true
role :app, "#{domain}"                   # This may be the same as your `Web` server
role :db,  "#{domain}", :primary => true # This is where Rails migrations will run
