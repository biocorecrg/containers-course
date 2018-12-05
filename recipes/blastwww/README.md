docker build -t blastwww -f Dockerfile ../../

docker run -d -v /db/test:/blastdb -p 8089:8081 --name myblast blastwww
