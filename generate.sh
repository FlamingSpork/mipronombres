#!/bin/bash

for f in $(find -name "*.php")
do
    # this grabs the filename without the last extension
    fn="${f%.*}"
    echo "Building $f to $fn.html"
    php "$f" > "$fn.html"
done