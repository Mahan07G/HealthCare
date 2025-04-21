FROM php:8.2-apache

# Install dependencies, including SQLite support
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip curl libpng-dev libonig-dev libxml2-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Apache config
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy Laravel app
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set permissions for Laravel directories
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel config & route cache
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Create SQLite file if not exists (ensure permissions)
RUN mkdir -p /var/www/html/database && \
    touch /var/www/html/database/database.sqlite && \
    chown www-data:www-data /var/www/html/database/database.sqlite && \
    chmod 775 /var/www/html/database/database.sqlite

# Expose port 80
EXPOSE 80

# Command to start Apache server
CMD ["apache2-foreground"]

# Run migrations (migrate after app starts, consider moving to entrypoint.sh)
RUN php artisan migrate --seed
