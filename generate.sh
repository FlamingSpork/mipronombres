#!/bin/bash

for f in $(find -name "*.php")
do
    # this grabs the filename without the last extension
    fn="${f%.*}"
    php "$f" > "$fn.html"
done