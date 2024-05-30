FROM debian:12
RUN apt update && apt install -y apache2
RUN echo 'Acquire::http { Proxy "http://10.0.5.7:8080"; };' > /etc/apt/apt.conf.d/02proxy
RUN a2enmod auth_digest authz_groupfile ssl
EXPOSE 80 443
#apachectl -D FOREGROUND
ENTRYPOINT [ "apachectl", "-D", "FOREGROUND" ]

