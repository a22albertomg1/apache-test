FROM debian:12
RUN echo 'Acquire::http { Proxy "http://10.0.5.7:8080"; };' > /etc/apt/apt.conf.d/02proxy
RUN apt update && apt install -y curl wget links iproute2 procps iputils-ping most dnsutils

ENTRYPOINT tail -f /dev/null