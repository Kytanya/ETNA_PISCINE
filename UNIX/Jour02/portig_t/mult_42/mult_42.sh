#!/bin/bash

cat passwd | awk -F ":" '{if($3 %42==0) print $1}' | sort
