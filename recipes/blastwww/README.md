# Docker

docker build -t blastwww -f Dockerfile ../../

docker run -d -v /db/test:/blastdb -p 8089:8081 --name myblast blastwww

# Singularity

sudo singularity build blastwww.sif Singularity

singularity run -B /db/test:/blastdb blastwww.sif

