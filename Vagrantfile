Vagrant.configure("2") do |config|
    config.vm.box = "silverstripeltd/dev-ssp"
    config.vm.network "private_network", type: "dhcp"
    config.vm.synced_folder "src/", "/var/www/mysite/www"
  
    config.vm.provider "virtualbox" do |v|
        v.memory = 2048
    end
end
