#!/bin/bash

mkdir test0
chmod 715 test0
touch -t 1210040000 test0

touch test1
echo "123" > test1
chmod 414 test1
touch -t 1210040000 test1

mkdir test2
chmod 504 test2
touch -t 1210040000 test2

touch test3
echo "" > test3
chmod 404 test3
touch -t 1210040000 test3

touch test4
echo "1" > test4
chmod 020 test4
touch -t 1210040000 test4

touch test5
echo "" > test5
chmod 404 test5
touch -t 1210040000 test5

touch testJour01
echo "bonjour samantha la roulette je suis die " > testJour01
chmod 615 testJour01
touch -t 1210040000 testJour01
ln -s testJour01 test6
touch -ht 1210040000 test6

