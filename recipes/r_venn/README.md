# Docker

docker build -t venn_diagram -f Dockerfile .

docker run -ti -v $HOME/tmp/output:/output -v $(pwd)/input_files:/input -t venn_diagram Rscript do_venn.R /input/venn1.txt /input/venn2.txt
