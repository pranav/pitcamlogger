#!/bin/sh

wget http://pitcam.ccs.neu.edu/new.jpeg -O ./images/$(date +%s).jpeg 2> /dev/null
