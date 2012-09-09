#!/bin/sh

ls -a images/ |
sed -e 's/\.jpeg//g' |
while read x; do 
  echo -n "$x.jpeg | ";
  date -d @$x;
done |
egrep "\ $x:[0-9][0-9]:[0-9][0-9] " |
awk '{ print $1 }' |
xargs rm
