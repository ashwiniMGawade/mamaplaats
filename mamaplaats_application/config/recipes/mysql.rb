set :shared_children, shared_children + %w(dump)

namespace :mysql do

  desc <<-DESC
      Pull a fresh development version of the database
    DESC
    task :dump_dev, :roles => :app do

      user = Capistrano::CLI.ui.ask "External MySQL user: [c1mamaplaats] "
      user = 'c1mamaplaats' if user.empty?

      database = Capistrano::CLI.ui.ask "External MySQL DB: [c1mamaplaats] "
      database = 'c1mamaplaats' if database.empty?

      host = Capistrano::CLI.ui.ask "External MySQL Host: [94.23.28.222] "
      host = '94.23.28.222' if host.empty?

      password = Capistrano::CLI.password_prompt "External Server SQL password: "

      local_user = Capistrano::CLI.ui.ask "Local MySQL user: [root] "
      local_user = 'root' if local_user.empty?

      local_database = Capistrano::CLI.ui.ask "Local MySQL DB: [mamaplaats] "
      local_database = 'mamaplaats' if local_user.empty?

      local_password = Capistrano::CLI.password_prompt "Local MySQL Pass: "

      # Create a working directory
      run_locally "mkdir -p database_import"

      # Export all tables
      run_locally "mysqldump -u #{user} -h #{host} -p#{password} --single-transaction #{database} > database_import/dump.sql"

      # Import all database locally
	  run_locally "mysql -u #{local_user} -p#{local_password} #{local_database} < ./database_import/dump.sql"

	  # Correct the Domain
      run_locally "mysql -u #{local_user} -p#{local_password} -D #{local_database} -e \"UPDATE wp_options SET option_value = 'http://www.mamaplaats.dev/wordpress/' WHERE option_name = 'siteurl';\""
      run_locally "mysql -u #{local_user} -p#{local_password} -D #{local_database} -e \"UPDATE wp_options SET option_value = 'http://www.mamaplaats.dev/' WHERE option_name = 'home';\""

	  # Clean up
      # run_locally "rm -rf database_import"

      # Run migrations
      # run_locally "./minion migrations:run"
    end
end

depend :remote, :command, "mysqldump"
depend :remote, :command, "mysql"
depend :remote, :command, "gzip"

