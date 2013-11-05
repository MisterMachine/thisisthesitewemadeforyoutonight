# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # All Vagrant configuration is done here. The most common configuration
  # options are documented and commented below. For a complete reference,
  # please see the online documentation at vagrantup.com.

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "siteIMadeForYou"
  config.vm.box = "lucid32"
  
  # The url from where the 'config.vm.box' box will be fetched if it
  # doesn't already exist on the user's system.
  config.vm.box_url = "http://files.vagrantup.com/lucid32.box"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network :private_network, ip: "192.168.33.10"

  #Provision script - run once
  config.vm.provision "shell", path: "provision.sh"

  # Copy the vhost file to default and reload apache - run every vagrant up
  config.vm.provision "shell", path: "apache.sh"

  # Compass watch - don't run as sudo
  config.vm.provision "shell", path: 'compass.sh', privileged: false

end
