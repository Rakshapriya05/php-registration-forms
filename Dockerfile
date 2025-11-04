# Use official PHP image with Apache
FROM php:8.2-apache

# Copy all files into the container
COPY . /var/www/html/

# Expose port 10000 (Render expects your app to run on this)
EXPOSE 10000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "/var/www/html"]
