set :default_stage, "tst"
set :scm, :git
set :scm_username, 'webdev'
set :repository, 'git@bitbucket.org:affiliate4you/mamaplaats.git'
set :change_ownership, true
set :use_sudo, false
set :keep_releases, 4
set :wordpress_version, "3.5.1"
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]
set :git_enable_submodules, 1
set :deploy_via, :remote_cache

ssh_options[:forward_agent] = true

default_run_options[:pty] = true

load './config/recipes/php'
load './config/recipes/mysql'
require 'capistrano/ext/multistage'
load "./config/recipes/a4y"
