FROM php:apache
RUN apt update \
    && apt install -y \
    iputils-ping \
    wakeonlan \
RUN a2enmod rewrite
WORKDIR /www/html
COPY . /www/html/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
