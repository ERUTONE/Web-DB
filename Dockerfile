FROM httpd
RUN apt update \
    && apt install -y
    wakeonlan \
    apache2 \
    php \
    libapache2-mod-php \
RUN a2enmod rewrite
WORKDIR /www/html
COPY . /www/html/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
