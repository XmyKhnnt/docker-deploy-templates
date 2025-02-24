# Use official PHP image with FPM
FROM php:8.1-fpm

# Install necessary PHP extensions if required
RUN docker-php-ext-install pdo pdo_mysql

# Configure PHP settings (if necessary)
COPY ./php.ini /usr/local/etc/php/


# Expose port 9000 for PHP-FPM
EXPOSE 9000
