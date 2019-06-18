# containers-course
Course on Linux containers for scientific environments. 

## Editions 

* June 13-14, 2019. CRG, Barcelona, Spain. [Slides](https://slides.com/similis/introduction-linux-containers-training/) and [https://github.com/ArangoGutierrez/Singularity-tutorial hands-on repository by Carlos Eduardo Arango Gutierrez]
* January 28-29, 2019. CRG, Barcelona, Spain. [Slides](https://slides.com/similis/introduction-linux-containers-training/) and Web seminar by [Dave Godlove](https://github.com/GodloveD) ([associated material](https://singularity-tutorial.github.io/))
* December 11-12, 2018. CRG, Barcelona, Spain. [Slides](https://slides.com/similis/introduction-linux-containers-training/)

## Sessions guide

### Session 1

* Introduction to containerization

* Introduction to Docker

* [Docker Hub](https://hub.docker.com/). Linux and its diversity. Example to different images. Tags

* Hands-on testing different images

* Exporting containers into tar files and importing them back

* Introduction to software installation

* Creating Dockerfiles

* Hands-on testing of different installation methods

    * Examples
        * NCBI Blast+
        * Venn Diagram R script
        * Possible exercise: Trimmomatic (http://www.usadellab.org/cms/?page=trimmomatic)
        * Possible exercise: Samtools (http://www.htslib.org/)

* Volumes

   * Using sequences. From http://www.uniprot.org
   
   * Using Database. Example: Swissprot from NCBI - [FASTA files](http://ftp.ncbi.nlm.nih.gov/blast/db/FASTA/)

* Hands-on testing of different images and volumes

* Services

* Port mapping and examples with services

* Different approaches to daemons and services

* Hands-on with services

    * NCBI Blast+ with PHP script
    * Possible exercise: Repeat the same with Samtools or Trimmomatic
    * Possible exercise: Play with Shiny App examples
        * https://github.com/LJI-Bioinformatics/Shiny-PCA-Maker
        * https://github.com/philippmuench/Donut
    
* Hands-on, preparing your own example


### Session 2

* Sum-up last session

* Putting containers to work together

* Hands-on example

    * NCBI Blast+ with PHP script + MySQL database
    * Repeat the same with Samtools

* Docker compose

* Hands-on example

* Contributing back your own images. Automated images with Github

* Introduction to singularity. Differences with Docker

* Different image types. Different ways to generate images

* Hands-on in getting images

* Execution approaches in Singularity

* Hands-on executing images

* Singularity files. Custom building of Singularity images

* Hands-on building of Singularity images

* Using Docker for building Singularity files

* Volumes in Singularity

* Services/instances in singularity

* Hands-on services with Singularity

* Sum-up course, finish preparing your own example

