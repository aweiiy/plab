# plab install
Full install:  
git clone --single-branch --branch master https://github.com/aweiiy/plab.git  
sudo apt-get install php-xml  
sudo chmod -R 755 plab/  
sudo chmod -R o+w plab/storage  
COMPOSER INSTALL{  
sudo apt install wget php-cli php-zip unzip  
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  
HASH="$(wget -q -O - https://composer.github.io/installer.sig)"  
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"  
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer  
sudo apt-get install php-curl  
sudo service apache2 restart  
}  
cd plab  
composer install --ignore-platform-reqs  
{create .env file}  
php artisan key:generate  
php artisan cache:clear  
{Create database}  
php artisan migrate  
php artisan db:seed  
sudo systemctl stop apache2  
sudo php artisan serve --host 10.0.0.233 --port 80  
  
Mysql:  
mysql -u root -p  
create database plab;  
![logo](https://user-images.githubusercontent.com/20345925/118338599-37389200-b51f-11eb-844a-9cc4c0c3b8b1.png)

