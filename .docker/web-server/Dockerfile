
FROM centos:centos7
RUN yum -y update 

#for development
RUN yum -y install epel-release tree which the_silver_searcher tmux
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN rpm -Uvh https://dev.mysql.com/get/mysql80-community-release-el7-1.noarch.rpm
RUn yum -y install httpd httpd-devel httpd-tools mysql-community-client
RUN yum -y install --enablerepo=remi --enablerepo=remi-php71 php php-opcache php-devel php-mbstring php-mcrypt php-mysqlnd php-phpunit-PHPUnit php-pecl-xdebug php-gmp php-bcmath php-intl redis php-pecl-redis php-gd php-pecl-zip

#httpd setting
RUN groupadd _www
RUN useradd _www -g _www
COPY ./httpd/conf/httpd.conf /etc/httpd/conf/httpd.conf

#php setting
COPY ./php.d/10-opcache.ini /etc/php.d/10-opcache.ini

#others
COPY ./tools/.tmux.conf /root/.tmux.conf

WORKDIR ./tmp
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer

RUN mkdir mock-laravel-docker
WORKDIR /var/www/html/mock-laravel-docker

#RUN systemctl enable httpd
#systemdの起動には--privilegedオプションが必要
EXPOSE 80
