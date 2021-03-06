# Docker

docker pull mariadb:10.1

docker run --name db -e MYSQL_ROOT_PASSWORD=root123 -e MYSQL_DATABASE=blast -e MYSQL_USER=blast -e MYSQL_PASSWORD=blast123 -v /tmp/data/db:/var/lib/mysql -d mariadb:10.1

docker build -t blastmysql -f Dockerfile ../../

docker run -d -v /home/user/db:/blastdb -v $(pwd)/config.json:/config/mysql.json -p 8089:8081 --name myblast --link db:mysql blastmysql


# Singularity

sudo singularity build blastmysql.sif Singularity

singularity run -B /home/user/db:/blastdb -B $(pwd)/config.json:/config/mysql.json blastmysql.sif

sudo singularity build mysql.sif Singularity.mysql

singularity exec -B /tmp/db:/var/lib/mysql mysql.sif mysql_install_db

singularity instance.start -B /tmp/db:/var/lib/mysql -B /tmp/socket:/run/mysqld mysql.sif mysql

singularity instance.list

singularity exec instance://mysql mysql -uroot -h127.0.0.1 -e "CREATE DATABASE blast; GRANT ALL PRIVILEGES on blast.* TO 'blast'@'%' identified by 'blast123' ;"

singularity instance.start -B /home/user/db:/blastdb -B $(pwd)/config.local.json:/config/mysql.json blastmysql.sif blast

singularity instance.list

singularity instance stop.blast

singularity instance.stop mysql


