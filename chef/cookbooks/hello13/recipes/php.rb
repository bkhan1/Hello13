# Cookbook Name:: php
# Recipe:: default

%w{php5 php5-fpm php5-cli phpunit}.each do |pkg|
  package pkg do
    action :install
    notifies :restart, 'service[nginx]', :delayed
  end
end