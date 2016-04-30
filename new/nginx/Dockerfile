FROM nginx

# Apply Nginx configuration
#终于知道这句的用处了 因为每次ip都是变的
#所以不能直接在这里复制到配置出 
#因为第一次改变后 第二次启动就找不到替换的变量了 
#看启动那个shell就明白了
#ADD nginx.conf /opt/etc/nginx.conf

ADD nginx.conf /etc/nginx/nginx.conf

# Nginx startup script
#再一次修改了 因为发现直接用 hosts 里的本地域名就可以指向服务器了
#ADD nginx-start.sh /opt/bin/nginx-start.sh
#RUN chmod u=rwx /opt/bin/nginx-start.sh

RUN mkdir -p /data
VOLUME ["/data"]

#不能执行 是找不到 sed 命令
#ENTRYPOINT 	sed -i "s/%fpm-ip%/$PHP_PORT_9000_TCP_ADDR/" /etc/nginx/nginx.conf
#ENTRYPOINT /etc/nginx/nginx-start.sh

WORKDIR /opt/bin
#ENTRYPOINT ["/opt/bin/nginx-start.sh"]
#CMD ["true"]
CMD ["nginx"]