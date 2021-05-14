# plab install
Full install:&nbsp;
git clone --single-branch --branch master https://github.com/aweiiy/plab.git &nbsp;
sudo apt-get install php-xml&nbsp;
sudo chmod -R 755 plab/ &nbsp;
sudo chmod -R o+w plab/storage &nbsp;
composer install &nbsp;
php artisan key:generate &nbsp;
php artisan cache:clear &nbsp;
{Create database} &nbsp;
php artisan migrate &nbsp;
php artisan db:seed &nbsp;
sudo systemctl stop apache2 &nbsp;
sudo php artisan serve --host 10.0.0.233 --port 80 &nbsp;
&nbsp;
Mysql: &nbsp;
mysql -u root -p &nbsp;
create database plab; &nbsp;
![logo](https://user-images.githubusercontent.com/20345925/118338599-37389200-b51f-11eb-844a-9cc4c0c3b8b1.png)

