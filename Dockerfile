FROM php:8.3-fpm

# Устанавливаем системные зависимости
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Устанавливаем PHP расширения
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копируем файлы проекта
COPY . .

# Устанавливаем зависимости
RUN composer install --no-dev --optimize-autoloader

# Генерируем ключ (позже он будет переопределён через .env)
RUN php artisan key:generate

# Права на storage
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Запускаем сервер
CMD php artisan serve --host=0.0.0.0 --port=10000