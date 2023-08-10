FROM php:7.4.0-fpm

WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer



COPY . .

RUN docker-php-ext-install gettext intl pdo_mysql gd

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

RUN composer install --optimize-autoloader --no-dev


# Run migrations
#CMD ["php", "artisan", "migrate"]
RUN chmod +x /var/www/html/run.sh

CMD ["/var/www/html/run.sh"]


CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]

EXPOSE 8000

