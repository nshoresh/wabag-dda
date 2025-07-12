RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    curl \
    npm \
    unzip \
    git \
    && docker-php-ext-install \
        intl \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        pcntl \
        bcmath

# Install Yarn
RUN npm install -g yarn

# Build frontend assets
RUN yarn install && yarn prod
