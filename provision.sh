#!/usr/bin/env bash


# Determine if this machine has already been provisioned
# Basically, run everything after this command once, and only once
if [ -f "/var/vagrant_provision" ]; then 
    exit 0
fi

function say {
    printf "\n--------------------------------------------------------\n"
    printf "\t$1"
    printf "\n--------------------------------------------------------\n"
}


# Install Apache
say "Installing Apache and setting it up."
    # Update aptitude library
    apt-get update >/dev/null 2>&1
    # Install apache2 
    apt-get install -y apache2 >/dev/null 2>&1
    # Remove /var/www path
    rm -rf /var/www
    # Symbolic link to /vagrant/site path
    ln -fs /vagrant/application /var/www
    # Enable mod_rewrite
    a2enmod rewrite

# Install mysql
say "I'm installing MySQL Server."
export DEBIAN_FRONTEND=noninteractive
    apt-get update
    apt-get install -y mysql-server
    sed -i -e 's/127.0.0.1/0.0.0.0/' /etc/mysql/my.cnf
    restart mysql
    mysql -uroot mysql <<< "GRANT ALL ON *.* TO 'root'@'%'; FLUSH PRIVILEGES;"


say "I'm installing PHP Modules"
    # Install php5, libapache2-mod-php5, php5-mysql curl php5-curl
    apt-get install -y php5 libapache2-mod-php5 php5-mysql curl php5-curl >/dev/null 2>&1

# Restart Apache
say "I'm restarting Apache"
    service apache2 restart

# Installing Ruby
say "I'm installing rvm - preparing for ruby and compass"
    curl -L https://get.rvm.io | bash -s stable
    source /etc/profile.d/rvm.sh
    rvm requirements

say "I'm installing ruby now... wish me luck"
    rvm install ruby
    rvm use ruby --default
    rvm rubygems current

say "I'm installing SASS + COMPASS"
    gem install sass
    gem install compass





# Let this script know not to run again
touch /var/vagrant_provision