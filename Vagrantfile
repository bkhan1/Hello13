# -*- mode: ruby -*-
# vi: set ft=ruby :

# Update this Vagrantfile such that it provisions a box using the Chef recipe
# created in Part 2, and exposes the PHP application at localhost:8181
#
# Once a "vagrant up" is complete, http://localhost:8181/ in a browser on your 
# workstation should display the rendered index page.

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.synced_folder ".", "/srv/hello13"
  
  config.vm.network :forwarded_port, guest: 80, host: 8181
 
  config.berkshelf.berksfile_path = 'chef/cookbooks/hello13/Berksfile'
  config.berkshelf.enabled = true
  
  config.vm.provision "chef_solo" do |chef|
	chef.cookbooks_path = "chef/cookbooks"
	chef.run_list = ["apt", "nginx", "hello13::default", "hello13::php", "hello13::composer"]
  end 
  
end


