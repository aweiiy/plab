# plab
Full install:
git clone --single-branch --branch master https://github.com/aweiiy/plab.git
sudo apt-get install php-xml
sudo chmod -R 755 plab/
sudo chmod -R o+w plab/storage
composer install
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
