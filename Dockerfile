# Stage 1: PHP
FROM php:8.2-fpm-alpine

ENV APP_NAME=Fresheats-App
ENV APP_ENV=production
ENV APP_KEY=base64:4rXNus8IH9iOawDoZDaXjDHbXWcZVFgjmg/2ZaenEMk=
ENV APP_DEBUG=true

ENV DB_CONNECTION=mysql
ENV DB_HOST=127.0.0.1                
# 35.224.132.138
ENV DB_PORT=3306
ENV DB_DATABASE=fresheats-db
ENV DB_USERNAME=root
ENV DB_PASSWORD=admin12345

ENV MIDTRANS_MERCHAT_ID=G360722397
ENV MIDTRANS_SERVER_KEY="SB-Mid-server-u6JeAuJlPcR5ffeOnDcPwnj1"
ENV MIDTRANS_CLIENT_KEY="SB-Mid-client-WbqjS8Z5FDV-bQmt"
ENV MIDTRANS_IS_PRODUCTION=false
ENV MIDTRANS_IS_SANITIZED=true
ENV MIDTRANS_IS_3DS=true

RUN apk add --no-cache nginx wget

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && /usr/local/bin/composer install --no-dev

RUN composer require predis/predis

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN chown -R ww