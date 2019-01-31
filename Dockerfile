FROM base-centos7

MAINTAINER alfa0015 <alfa0015.rafael@gmail.com>

USER root

RUN yum -y install httpd

RUN yum -y install epel-release

RUN yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm

RUN yum install yum-utils

RUN yum-config-manager --enable remi-php71

RUN yum install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo

RUN systemctl start httpd
