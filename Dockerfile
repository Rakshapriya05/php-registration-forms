# Use official PHP image with Apache
FROM php:8.2-apache

# Copy all project files to web root
COPY . /var/www/html/

# Expose web server port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
