# plab install
Full install:  
git clone --single-branch --branch master https://github.com/aweiiy/plab.git  
sudo apt-get install php-xml  
sudo chmod -R 755 plab/  
sudo chmod -R o+w plab/storage  
composer install  
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

