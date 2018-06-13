##Descargamos una versión concreta de UBUNTU, a través del tag
FROM ubuntu:12.04
##Actualizamos el sistema
RUN apt-get update
RUN apt-get install software-properties-common python-software-properties -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update \
  && apt-get install -y --force-yes \
  php5 \
  php5-fpm \
  php5-cli \
  php5-mysql \
  php5-mcrypt \
  php5-curl \
  php5-gd \
  php5-intl \
  mysql-client

RUN apt-get update
RUN apt-get install apache2 -y
RUN apt-get install apache2 php5 libapache2-mod-php5 -y
RUN a2enmod php5
RUN echo "ServerName localhost" | tee /etc/apache2/conf.d/fqdn
CMD /usr/sbin/apache2ctl -D FOREGROUND
EXPOSE 80