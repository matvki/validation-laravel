# This readme is made for understand what this project is about

This project was made for a validation of laravel.

So for make it alive you have to install laravel, if you don't know how don't worry i will explain to you how you can do it.

## You have to follow the following instruction:
- first you have do have vagrant and virtualbox install on your computer
- then do a vagrant init and make sur it look like this one:
    ``` 
    # -*- mode: ruby -*-
    # vi: set ft=ruby :
    Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/xenial64"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.synced_folder "./data", "/var/www/html"

    config.vm.provider "virtualbox" do |vb|
        vb.memory = "2048"
    end
    end 
    ```
- then vagrant up and you have to install many things:
    
    - sudo apt update
    - sudo add-apt-repository ppa:ondrej/php
    - sudo apt update
    - sudo apt install php7.3 apache2 libapache2-mod-php7.3 mysql-server php7.3-mysql php7.3-mbstring php7.3-dom zip
    - udo service apache2 restart
- then you have to install composer and move it:
    - first you have to be in /var/www/html then do :
        - php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
        - php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
        - php composer-setup.php
        - php -r "unlink('composer-setup.php');"
        - sudo mv composer.phar /usr/local/bin/composer
- then to go in /etc/apache2/envvars for modify your user name:
    - export APACHE_RUN_USER=’user name’(in vagrant it's vagrant)
    - export APACHE_RUN_GROUP=’user name’(in vagrant it's vagrant)
- then to go in /etc/apache2/sites-available/000-default.conf and to do:
    - modification on the line DocumentRoot /var/www/html/”name of the folder where you're going to install laravel”/public
    - add the following line before the last braquette ‘</VirtualHost>’:
        ````
        <Directory /var/www/html>
            Options Indexes FollowSymLinks MultiViews
            AllowOverride All
            Require all granted
        </Directory>
    - exit and do : sudo a2enmod rewrite
    - and : sudo service apache2 restart
- then you juste have to go on the folder where you want to have laravel and clone this repositorie




