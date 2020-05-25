FROM php:7.2.0

RUN apt-get update \
	# && apt-get install -y libmcrypt-dev --no-install-recommends \
	# && apt-get install -y postgresql postgresql-contrib \
	&& postgresql-client \
	&& gcc libc-dev linux-headers postgresql-dev musl-dev zlib zlib-dev \
	&& apt-get install -y libpq-dev \
	&& docker-php-ext-install pgsql pdo pdo_pgsql

# RUN pecl install imagick
# RUN docker-php-ext-enable imagick
# RUN docker-php-ext-install zip

WORKDIR /app