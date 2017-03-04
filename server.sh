#!/usr/bin/env bash

p=$(cd `dirname $0`; pwd)
cd $p

jekyll clean
jekyll build
jekyll server
