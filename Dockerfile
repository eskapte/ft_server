FROM debian:buster

RUN apt update

WORKDIR /user/src/services


RUN apt install -y nginx mariadb-server \
                   openssl php7.3-fpm php-mysql \
                   vim wget

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz && \
    tar xvf phpMyAdmin-4.9.7-all-languages.tar.gz && rm -rf phpMyAdmin-4.9.7-all-languages.tar.gz && \
    mv phpMyAdmin-4.9.7-all-languages/ /var/www/html/phpmyadmin/

RUN wget https://wordpress.org/latest.tar.gz && \
    tar -zxvf latest.tar.gz && rm latest.tar.gz && \
    mv wordpress /var/www/html/wordpress

COPY /srcs/start.sh .
COPY /srcs/mariadb-server/start.sql ./mariadb/
COPY /srcs/nginx/lhawick /etc/nginx/sites-available/
COPY /srcs/wp/wp-config.php /var/www/html/wordpress/wp-config.php
COPY /srcs/change_ai.sh .

RUN chmod ugo+x start.sh

CMD ./start.sh

EXPOSE 80
EXPOSE 443