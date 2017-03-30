#!/bin/bash
convert brio.jpg -resize 400% -type Grayscale input.tif
tesseract -l eng input.tif output