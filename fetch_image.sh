#!/bin/sh

curl http://pitcam.ccs.neu.edu/new.jpeg > ./images/$(date +%s).jpeg
