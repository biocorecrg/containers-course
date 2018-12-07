docker pull mariadb:10.1

docker run --name db -e MYSQL_ROOT_PASSWORD=root123 -e MYSQL_DATABASE=blast -e MYSQL_USER=blast -e MYSQL_PASSWORD=blast123 -v /tmp/data/db:/var/lib/mysql -d mariadb:10.1

docker build -t blastmysql -f Dockerfile ../../

docker run -d -v /db/test:/blastdb -v $(pwd)/config.json:/config/mysql.json -p 8089:8081 --name myblast --link db:mysql blastmysql
