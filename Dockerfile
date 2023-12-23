FROM php:apache
RUN apt-get update \
    && apt-get install -y \
    iputils-ping \
    wakeonlan \
RUN a2enmod rewrite
WORKDIR /www/html
COPY . /www/html/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
