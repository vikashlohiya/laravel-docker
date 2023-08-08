FROM php:7.4.0-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y     
    && docker-php-ext-install gd pdo pdo_mysql

COPY . .

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]
