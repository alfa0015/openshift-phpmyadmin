FROM base-centos7

MAINTAINER alfa0015 <alfa0015.rafael@gmail.com>

USER root

RUN yum -y install httpd

RUN echo "holaa"
