# All requirements to install it on Linux stack Ubuntu
sudo apt-get update
sudo apt-get upgrade

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

sudo a2enmod rewrite
sudo service apache2 restart
