set :domain, 'ovh01'
set :user, 'developmenttest'
set :group, 'web16'
set :env, 'tst'
set :deploy_to, "/var/www/clients/client1/test.mamaplaats.nl/current"
set :branch, "develop"
set :sitehost, "test.mamaplaats.nl"

set :git_enable_submodules, 1

#before 'deploy', 'mysql:dump'
after 'deploy:finalize_update', 'deploy:cleanup', 'a4y:set_security', 'a4y:activate_testing', 'a4y:compress', 'a4y:show_time'

role :web, "#{domain}", :primary => true, :no_release => false
role :app, "#{domain}"                   # This may be the same as your `Web` server
role :db,  "#{domain}", :primary => true # This is where Rails migrations will run