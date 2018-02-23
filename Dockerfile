FROM tutum/lamp:latest
#RUN rm -fr /app && git clone https://github.com/shalithasuranga/lamp-app-test.git /app
RUN rm -rf /app
ENV MYSQL_ROOT_PASSWORD "root"
EXPOSE 80 3306
COPY app/ /var/www/html/
CMD ["/run.sh"]
