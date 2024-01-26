FROM mysql:5.7
COPY my.cnf /etc/mysql/
COPY MYSQL_GENERAL_LOG /docker-entrypoint-initdb.d/
ENV MYSQL_GENERAL_LOG=1
ENV MYSQL_GENERAL_LOG_FILE=/var/log/mysql/general.log
