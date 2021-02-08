openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -out /etc/ssl/certs/localhost.crt \
        -keyout /etc/ssl/certs/localhost.key -subj "/C=RU/ST=MSK/L=MSK/O=None/CN=localhost"

service nginx stop
service php7.3-fpm stop

chown -R $USER:$USER /var/www/html/
ln -s /etc/nginx/sites-available/lhawick /etc/nginx/sites-enabled/
rm /var/www/html/index.nginx-debian.html

service nginx start
service php7.3-fpm start
service mysql start

mysql < mariadb/start.sql

bash