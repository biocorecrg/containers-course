# Parent image (first layer)
FROM rocker/r-ver:3.5.1

# Install R/Bioconductor packages
RUN Rscript -e 'install.packages("ggplot2", repos="http://cran.us.r-project.org")'

# Copy local script to image
RUN mkdir -p /scripts
COPY ./myplot.R /scripts/myplot.R

WORKDIR /scripts

VOLUME /output

# Run R script
CMD ["Rscript", "myplot.R"]

