FROM php:fpm
RUN mkdir -p /data
VOLUME ["/data"]

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    #这个mysqli是我自己添加的 不过这个好像已经下载好了 所以直接install就可以了 没有的恐怕需要上面的apt-get 下载下来才行 不过不知道下载后保存的位置会不会错 因为我自己下了个mysqli 不过在容器里用命令安装时却说找不到
    && docker-php-ext-install -j$(nproc) mysqli


CMD ["php-fpm"]