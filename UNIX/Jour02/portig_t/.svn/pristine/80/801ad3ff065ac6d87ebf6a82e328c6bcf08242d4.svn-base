#!/bin/bash

cat passwd | grep -E "/shells/etna" | sed -n "2~2p" | cut -d ":" -f1 | rev | sort -rd | sed -n "$MY_LINE1 , $MY_LINE2 p" | tr "\n" "," | sed -re 's/,$/./g' | sed -re 's/$/\n/g' 
