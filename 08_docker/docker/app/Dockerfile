FROM php:7.3-fpm

COPY php.ini /usr/local/etc/php/

RUN apt-get update \
    && apt-get install -y locales \
    zlib1g-dev libzip-dev mysql-common wget npm \
    && docker-php-ext-install zip pdo_mysql \
    && locale-gen ja_JP.UTF-8 \
    && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc

ENV LANG ja_JP.UTF-8
ENV LC_CTYPE ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.utf8
ENV LC_ALL ja_JP.UTF-8

COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

RUN composer config -g repos.packagist composer https://packagist.jp
RUN composer global require hirak/prestissimo

RUN composer global require "laravel/installer"

WORKDIR /var/www/html

RUN echo 'export PS1="\n\[\033[35m\]\u@\h\[\033[00m\]:\[\033[36m\]\w\[\033[00m\]\n[app] \$ "' >> ~/.bashrc