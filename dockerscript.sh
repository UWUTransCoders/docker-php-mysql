sudo docker build -t docker-mysql-php . 
sudo docker run -p 5000:80 -d docker-mysql-php
echo "done"