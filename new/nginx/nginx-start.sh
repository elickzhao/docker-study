#!/bin/sh
cp /opt/etc/nginx.conf /etc/nginx/nginx.conf	# 为了避免第二次启动找不到替换变量 %fpm-ip%
sed -i "s/%fpm-ip%/$PHP_PORT_9000_TCP_ADDR/" /etc/nginx/nginx.conf
echo "nginx start ......"
exec /usr/sbin/nginx
