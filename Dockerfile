FROM httpd
RUN apt-get update \
    && apt-get install -y
    wakeonlan \
    iputils-ping \
    apache2 \
    php \
    libapache2-mod-php \
RUN a2enmod rewrite
WORKDIR /www/html
COPY . /www/html/
COPY php.ini /etc/php/8.1/cgi/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
