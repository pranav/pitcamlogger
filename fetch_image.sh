#!/bin/sh

wget http://pitcam.ccs.neu.edu/new.jpeg -O ./public_html/images/$(date +%s).jpeg 2> /dev/null
