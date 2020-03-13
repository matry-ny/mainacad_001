FROM php:7.4-fpm

# Install modules
RUN apt-get update && apt-get install -y \
        openssh-client \
        libmcrypt-dev \
        libonig-dev \
        libzip-dev \
        libicu-dev \
        libpq-dev \
        uuid-dev \
        openssl \
        unzip \
        wget \
        curl \
        tar \
        zip \
        git \
            --no-install-recommends

RUN docker-php-ext-install zip intl mbstring exif pdo pdo_mysql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer

WORKDIR /var/www

CMD ["php-fpm"]