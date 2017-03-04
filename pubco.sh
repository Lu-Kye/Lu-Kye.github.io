#!/usr/bin/env bash

p=$(cd `dirname $0`; pwd)
cd $p

php publish.php
sh commit.sh
