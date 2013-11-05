#!/usr/bin/env bash

# Compass project path
scss_path=/vagrant/application/wp-content/themes/madetonight_genesis_child/assets/css_compass

# First compile the project, so that we get style.css
printf "Compiling Project\n"
compass compile $scss_path

# Now, watch the project for changes
compass watch $scss_path > /dev/null 2>/dev/null &
cid=$! > ./cwatch.pid
printf "Compass is watcing your project\n"
printf "PID: $cid"
