service 'nginx' do
	action [:enable, :start]
end	

template "/etc/nginx/nginx.conf" do
  owner "vagrant"
  group "vagrant"
  mode "0644"
  source "nginx.conf.erb"
  notifies :restart, 'service[nginx]', :delayed
end

nginx_site 'default' do
  enable false
end

link '/etc/nginx/sites-enabled/hello13' do
  to '/etc/nginx/sites-available/hello13'
end


file "/etc/nginx/sites-available/default" do
  action :delete
  notifies :restart, 'service[nginx]', :delayed
end

service "php5-fpm" do
  action :start
end  



