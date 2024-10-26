FROM dunglas/frankenphp

RUN install-php-extensions \
    bcmath \
    mysqli \
    pdo_mysql \
    pcntl

COPY vendor /app/vendor
COPY storage /app/storage
RUN chown -R 1000:1000 /app/storage
COPY bootstrap /app/bootstrap
RUN chown -R 1000:1000 /app/bootstrap/cache
COPY resources /app/resources
COPY config /app/config
COPY database /app/database
COPY routes /app/routes
COPY artisan *.* /app/
COPY app /app/app
COPY public /app/public

WORKDIR /app
VOLUME /app/storage

ARG APP_VERSION=latest
ENV APP_VERSION=$APP_VERSION

EXPOSE 8000

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
