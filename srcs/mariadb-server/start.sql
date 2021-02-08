CREATE DATABASE ft_server;
CREATE USER 'lhawick'@'localhost' IDENTIFIED BY 'bonopart';
GRANT ALL ON *.* TO 'lhawick'@'localhost' IDENTIFIED BY 'bonopart' WITH GRANT OPTION;
FLUSH PRIVILEGES;