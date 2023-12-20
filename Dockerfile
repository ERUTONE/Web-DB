FROM ubuntu:22.04
RUN apt-get update && \
    apt-get install -y \
    wakeonlan \
    apache2 \
    php \
    libapache2-mod-php \
    && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
WORKDIR /var/www/html
COPY . /var/www/html/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
