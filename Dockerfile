FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Создаём .env из переменных окружения
RUN echo "APP_ENV=${APP_ENV}" >> .env && \
    echo "APP_DEBUG=${APP_DEBUG}" >> .env && \
    echo "APP_URL=${APP_URL}" >> .env && \
    echo "APP_KEY=${APP_KEY}" >> .env && \
    echo "DB_CONNECTION=${DB_CONNECTION}" >> .env

RUN composer install --no-dev --optimize-autoloader

RUN php artisan key:generate --force

RUN php artisan migrate --force || true

RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

CMD php artisan serve --host=0.0.0.0 --port=10000