FROM php:7.3-fpm

RUN apt-get update \
    && apt-get install -y locales \
    && locale-gen ja_JP.UTF-8 \
    && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc

ENV LANG ja_JP.UTF-8
ENV LC_CTYPE ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.utf8
ENV LC_ALL ja_JP.UTF-8


 # hello.phpをカレントディレクトリにコピー( php:7.3-fpm の場合は /var/www/html )
 COPY hello.php .