FROM php:7.3

RUN apt update -y && apt upgrade -y && apt install -y git

# PHP Composer Install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

# PHP Packages
RUN docker-php-ext-install bcmath
RUN apt install -y libzip-dev unzip && docker-php-ext-install zip
RUN apt install -y mysql-client && docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-install sockets

# Laravel Project
WORKDIR /project
COPY . .
RUN composer install
RUN cp .env.example .env

ENTRYPOINT [ "php", "artisan" ]
CMD [ "consumer" ]
