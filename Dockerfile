#our base image
FROM paichayon/php5-alpine:latest

RUN apk del curl
RUN apk add --update-cache --repository http://dl-8.alpinelinux.org/alpine/v3.7/main --allow-untrusted
RUN apk upgrade freetype

# ADD PHP file required for run web page
#COPY .  /app
ADD index.php /app/index.php
ADD phpinfo.php /app/phpinfo.php
