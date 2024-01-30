# Use the official PHP image with Apache
FROM php:7.4-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy the project files to the container
COPY . /var/www/html

# Install project dependencies
RUN composer install

# Set the proper permissions
RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage

# Expose port 8000 and start Apache
EXPOSE 8000
CMD ["apache2-foreground"]
