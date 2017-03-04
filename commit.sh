#!/usr/bin/env bash

p=$(cd `dirname $0`; pwd)
cd $p

git add .
git commit -m"update blog"
git push origin master
