FROM nginx

ADD nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /data/nginx/conf.d/
VOLUME ["/data"]

WORKDIR /opt/bin
CMD ["nginx"]