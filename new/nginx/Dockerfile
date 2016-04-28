FROM nginx

# Apply Nginx configuration
ADD nginx.conf /etc/nginx/nginx.conf

# Nginx startup script
ADD nginx-start.sh /opt/bin/nginx-start.sh
RUN chmod u=rwx /opt/bin/nginx-start.sh

RUN mkdir -p /data
VOLUME ["/data"]

#不能执行 是找不到 sed 命令
#ENTRYPOINT 	sed -i "s/%fpm-ip%/$PHP_PORT_9000_TCP_ADDR/" /etc/nginx/nginx.conf
#ENTRYPOINT /etc/nginx/nginx-start.sh

WORKDIR /opt/bin
ENTRYPOINT ["/opt/bin/nginx-start.sh"]
CMD ["true"]
#CMD ["nginx"]