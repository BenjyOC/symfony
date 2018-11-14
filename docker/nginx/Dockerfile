FROM bra-php:latest as php

COPY . /srv/app

WORKDIR /srv/app

RUN composer install

FROM nginx:alpine

COPY docker/nginx/default.conf /etc/nginx/conf.d/
COPY --from=php /srv/app/public /srv/app/public
