# Example Dockerfile
FROM php:8.1-apache

# Copy all project files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Enable Apache mod_rewrite (needed for pretty URLs sometimes)
RUN a2enmod rewrite

# Expose port
EXPOSE 80
