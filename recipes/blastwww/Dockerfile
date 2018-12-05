FROM debian:stretch

# File Author / Maintainer
MAINTAINER Toni Hermoso Pulido <toni.hermoso@crg.eu> 

ARG BLAST_VERSION=2.7.1

RUN apt-get update; apt-get install -y curl;

RUN cd /usr/local; curl --fail --silent --show-error --location --remote-name ftp://ftp.ncbi.nlm.nih.gov/blast/executables/blast+/${BLAST_VERSION}/ncbi-blast-${BLAST_VERSION}+-x64-linux.tar.gz
RUN cd /usr/local; tar zxf ncbi-blast-${BLAST_VERSION}+-x64-linux.tar.gz; rm ncbi-blast-${BLAST_VERSION}+-x64-linux.tar.gz
RUN cd /usr/local/bin; ln -s /usr/local/ncbi-blast-${BLAST_VERSION}+/bin/* .

# Default location of BLAST databases
VOLUME /blastdb
ENV BLASTDB /blastdb

# Now adding web stuff
RUN apt-get install -y php-cli

RUN mkdir /wwww
WORKDIR /wwww

COPY ./scripts/index.php .

# Clean cache
RUN apt-get clean
RUN set -x; rm -rf /var/lib/apt/lists/*

EXPOSE 8081
ENTRYPOINT ["php", "-S", "0.0.0.0:8081"]

