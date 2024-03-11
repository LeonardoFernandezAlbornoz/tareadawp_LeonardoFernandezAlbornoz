FROM debian:12

RUN apt-get update && apt-get install -y php8.2-fpm php-zip php8.2-mysql php8.2-xml php8.2-gd php-json php8.2-curl php8.2-mbstring php-intl

EXPOSE 9000

ENTRYPOINT [ "php-fpm8.2" ,"-F"]
