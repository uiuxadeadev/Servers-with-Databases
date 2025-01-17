FROM php:8.3-fpm

# システムの依存関係をインストール
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql mysqli

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 作業ディレクトリの設定
WORKDIR /var/www/html

# PHP設定のカスタマイズ
COPY docker/php/php.ini $PHP_INI_DIR/conf.d/custom.ini