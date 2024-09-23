FROM php:8.3-zts-alpine
WORKDIR /var/www/html
RUN apk update 
RUN curl -sS https://getcomposer.org/installer | php -- --version=2.4.3 --install-dir=/usr/local/bin --filename=composer

COPY . .
RUN composer install --no-interaction --prefer-dist --optimize-autoloader -vvv

CMD ["php","artisan","serve","--host=0.0.0.0"]