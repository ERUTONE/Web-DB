FROM php:7.4-apache
RUN apt-get update && \
    apt-get install -y \
    wakeonlan \
    apache2 \
    php \
    libapache2-mod-php \
    && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
WORKDIR /www/html
COPY . /www/html/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
