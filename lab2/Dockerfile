FROM ubuntu
LABEL maintainer="p4nth3r-5237"
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y apache2 php
RUN rm /var/www/html/index.html
COPY index.php /var/www/html/
EXPOSE 80
CMD apachectl -D FOREGROUND