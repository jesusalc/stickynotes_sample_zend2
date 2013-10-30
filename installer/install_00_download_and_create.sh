#!/bin/bash

# Create dir
sudo mkdir /var/www/vhosts/zend-ajax 

cd /var/www/vhosts

sudo chown jesusalc:jesusalc zend-ajax/ -R

sudo chmod 755  zend-ajax/ -R

cd zend-ajax/

#get skelleton from online
git clone git://github.com/zendframework/ZendSkeletonApplication.git

cd ZendSkeletonApplication/

sudo mv * ..

sudo mv .* ..

cd ..

mkdir log

rm ZendSkeletonApplication/ -R

#update to download the rest
sudo composer self-update

sudo composer install

#create virtual hosts
sudo php  create_00_virtualhost.php

# create virtual link in sites-enabled
sudo a2ensite zend-ajax

# restart apache
sudo /etc/init.d/apache2 stop 

sudo echo "127.0.0.1   zend-ajax" > /etc/hosts

sudo /etc/init.d/apache2 start
