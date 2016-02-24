set :app_name, "asada"
set :location, "asada.qa.previousnext.com.au"
set :application, "asada.qa.previousnext.com.au"
set :repository,  "git@github.com:previousnext/#{app_name}.git"
set :user, "deployer"
set :runner, "deployer"
set :branch, "master"
set :port, 22
ssh_options[:forward_agent] = true
set :default_stage, "staging"
set :use_sudo, false

before "drupal:symlink_shared", "govcms:build"

namespace :govcms do
  desc "Build the GovCMS subtheme site."
  task :build do
    run "cd #{release_path} && composer install"
    run "cd #{release_path} && bin/phing drush:init"
    run "cd #{release_path} && bin/phing build"
  end
end
