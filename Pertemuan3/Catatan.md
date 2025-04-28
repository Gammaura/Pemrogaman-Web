Clone Github https://github.com/djambred/pemweb-gen2024
Copy Pert3 lalu lakukan Build
Akan terjadi error daemon ...
Setelah di Build lakukan perubahan pada file docker-compose.yml pada bagian volumes line 40, bagian default.conf yang depan diganti nginx.conf
compose up -d --build lagi

docker exec -it pemweb bash
- composer create-project --prefer-dist raugadh/fila-starter .

kalau putus koneksi rm -rf .*

root@pemweb:/var/www/html# chown -R www-data:www-data storage/*

root@pemweb:/var/www/html# php artisan storage:link

root@pemweb:/var/www/html# php artisan migrate

root@pemweb:/var/www/html# php artisan db:seed --force

akan error minta guard, 

ketik root@pemweb:/var/www/html# php artisan shield:generate --all

root@pemweb:/var/www/html# php artisan project:init

root@pemweb:/var/www/html# chmod 777 -R storage/* && chmod 777 -R bootstrap/*

buka localhost di browser