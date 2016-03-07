set :domain, 'ovh01'
set :user, 'developmentmamaplaats'
set :group, 'web13'
set :env, 'live'
set :deploy_to, "/var/www/clients/client1/mamaplaats.nl/current"
set :branch, "master"
set :sitehost, "www.mamaplaats.nl"

set :git_enable_submodules, 1

#before 'deploy', 'mysql:dump'
after 'deploy:finalize_update', 'deploy:cleanup', 'a4y:activate_production', 'a4y:compress', 'a4y:show_time'

role :web, "#{domain}", :primary => true, :no_release => false
role :app, "#{domain}"                   # This may be the same as your `Web` server
role :db,  "#{domain}", :primary => true # This is where Rails migrations will run
