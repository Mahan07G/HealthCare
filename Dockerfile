# 1. Base image
FROM php:8.2-apache

# 2. System deps & PHP extensions
RUN apt-get update \
 && apt-get install -y git unzip libzip-dev zip curl libpng-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo pdo_mysql zip \
 && a2enmod rewrite

# 3. Apache: replace default vhost with ours
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN rm /etc/apache2/sites-enabled/000-default.conf \
 && a2ensite 000-default.conf

# 4. App code
WORKDIR /var/www/html
COPY . /var/www/html

# 5. Remove any stray static index.html
RUN rm -f public/index.html

# 6. Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 7. Permissions
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Install & optimize Laravel
RUN composer install --no-dev --optimize-autoloader \
 && php artisan config:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# 9. Expose & launch
EXPOSE 80
CMD ["apache2-foreground"]
