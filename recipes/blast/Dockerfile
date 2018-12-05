FROM debian

# File Author / Maintainer
MAINTAINER Toni Hermoso Pulido <toni.hermoso@crg.eu> 

RUN apt-get update

RUN apt-get install -y ncbi-blast+;

# Clean cache
RUN apt-get clean
RUN set -x; rm -rf /var/lib/apt/lists/*