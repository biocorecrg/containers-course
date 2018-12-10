# Docker

docker pull mariadb:10.1

docker run --name db -e MYSQL_ROOT_PASSWORD=root123 -e MYSQL_DATABASE=blast -e MYSQL_USER=blast -e MYSQL_PASSWORD=blast123 -v /tmp/data/db:/var/lib/mysql -d mariadb:10.1

docker build -t blastmysql -f Dockerfile ../../

docker run -d -v /db/test:/blastdb -v $(pwd)/config.json:/config/mysql.json -p 8089:8081 --name myblast --link db:mysql blastmysql


# Singularity

sudo singularity build blastmysql.simg Singularity

singularity run -B /db/test:/blastdb -B $(pwd)/config.json:/config/mysql.json blastmysql.simg

sudo singularity build mysql.simg Singularity.mysql

singularity exec -B /tmp/db:/var/lib/mysql mysql.simg mysql_install_db

singularity instance.start -B /tmp/db:/var/lib/mysql -B /tmp/socket:/run/mysqld mysql.simg mysql

singularity instance.list

singularity exec instance://mysql mysql -uroot -h127.0.0.1 -e "CREATE DATABASE blast; GRANT ALL PRIVILEGES on blast.* TO 'blast'@'%' identified by 'blast123' ;"

singularity instance.start -B /db/test:/blastdb -B $(pwd)/config.local.json:/config/mysql.json blastmysql.simg blast

singularity instance.list

singularity instance stop.blast

singularity instance.stop mysql


