FROM nginx:1.20

RUN apt-get update -y \
    && apt-get install vim -y

RUN rm /etc/nginx/conf.d/default.conf

COPY default.conf /etc/nginx/conf.d

ENTRYPOINT ["/docker-entrypoint.sh"]

CMD ["nginx", "-g", "daemon off;"]
