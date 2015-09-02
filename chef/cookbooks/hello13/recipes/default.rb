# Cookbook Name: hello13
# Recipe: default

template "/etc/nginx/sites-available/site" do
  action :create
  owner "root"
  group "www-data"
  mode "0644"
  source "hello13.conf.erb"
  notifies :restart, 'service[nginx]', :delayed
end

link "/etc/nginx/sites-enabled/default" do
  action :delete
  notifies :restart, 'service[nginx]', :delayed
end

link '/etc/nginx/sites-enabled/site' do
  to '/etc/nginx/sites-available/site'
  notifies :restart, 'service[nginx]', :delayed
end
