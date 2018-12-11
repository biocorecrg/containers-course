## Retrieve arguments: 2 arguments that will be text files
args <- commandArgs(trailingOnly=TRUE)
arg1 <- args[[1]]
arg2 <- args[[2]]

# Load VennDiagram package
library("VennDiagram")

# Read in files
file1 <- scan(arg1, what="character")
file2 <- scan(arg2, what="character")

# Create list for Venn diagrams
list_files <- list(file1, file2)

# Name elements of list with file names
names(list_files) <- c(basename(arg1), basename(arg2))

# Plot Venn Diagram
venn.diagram(list_files, imagetype="png", filename=paste0("/output/",basename(arg1), "_", basename(arg2), ".png"), fill=c("lightblue", "lightgreen"))

