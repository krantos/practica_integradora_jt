FROM php:8.3-rc-fpm-alpine

WORKDIR /var/www

RUN	apk update && \ 
	apk add --no-cache postgresql-dev
	
RUN docker-php-ext-install pdo_pgsql 

RUN apk cache clean
