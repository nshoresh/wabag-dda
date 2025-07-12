# Use official PHP image with FPM
FROM php:8.2-fpm

# Install system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    zip unzip curl git npm yarn \
    && docker-php-ext-install \
        intl \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        pcntl \
        bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Install JS dependencies and build assets
RUN yarn install && yarn prod

# Set file permissions (optional)
RUN chown -R www-data:www-data /var/www

# Laravel optimizations
RUN php artisan optimize:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan storage:link

# Expose port
EXPOSE 8000

# Run Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
