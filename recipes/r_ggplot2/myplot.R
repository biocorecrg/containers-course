# File name as an argument
args <- commandArgs(trailingOnly=TRUE)
file_name <- args[[1]]

# Load library
library("ggplot2")

# Make test data frame
df_test <- data.frame(x=1:10, y=10:1, col=rep(c("blue", "green"), 5))

# Plot
p <- ggplot(df_test, aes(x=x,y=y,color=col)) + geom_point()

# Save in PNG file
png(paste0("/output/", file_name, ".png"))
print(p)
dev.off()

