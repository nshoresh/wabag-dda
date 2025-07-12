# Use official PHP 8.2 image with FPM
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libpng-dev libjpeg-dev libonig-dev libxml2-dev libzip-dev libicu-dev \
    build-essential npm gnupg \
    && docker-php-ext-install \
        intl pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Enable Yarn (via corepack or npm)
RUN npm install -g yarn

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Install JS dependencies and build assets
RUN yarn install && yarn prod

# Laravel optimizations
RUN php artisan optimize:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan storage:link \
 && php artisan migrate --force

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www

# Expose Laravel dev server port
EXPOSE 8000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
