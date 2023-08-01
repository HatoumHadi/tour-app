# use php apache base image
FROM php:8.1-apache

# install required packages
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nano
# install the following php docker extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# configure apache document root as per the image documentation in addition to rewrite and headers mods
ENV APACHE_DOCUMENT_ROOT /usr/src/travel-agency/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite headers

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# copy project contents into the container and set the working directory to /usr/src/synaps
COPY . /usr/src/travel-agency
WORKDIR /usr/src/travel-agency

# install Laravel dependencies
RUN composer install --no-interaction -o

# change the group ownership of the storage and bootstrap/cache directories to www-data
RUN chgrp -R www-data storage bootstrap/cache

# recusively grant all permissions, including write and execute, to the group
RUN chmod -R ug+rwx storage bootstrap/cache

# set the container entrypoint
CMD apachectl -D FOREGROUND
