# Docker

docker build -t blastwww -f Dockerfile ../../

docker run -d -v /home/user/db:/blastdb -p 8089:8081 --name myblast blastwww

# Singularity

sudo singularity build blastwww.sif Singularity

singularity run -B /home/user/db:/blastdb blastwww.sif

