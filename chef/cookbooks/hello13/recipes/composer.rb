# Cookbook Name:: Composer
# Recipe:: default

script "install_composer" do
  interpreter "bash"
  user "root"
  cwd "/srv/hello13"
  code <<-EOH
  curl -s https://getcomposer.org/installer | php 
  EOH
end

execute 'composer_config' do
  cwd '/srv/hello13'
  command 'php composer.phar install && touch composer.run'
  creates 'composer.run'
  action :run
end