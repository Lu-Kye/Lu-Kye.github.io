---
layout: post
title: xcodebuild-universal-framework
subtitle: 
date: 2017-03-04 03-Mar-53
author: Lu-Kye
header-img: img/post-bg.jpg
catelog: true
tags: 
  - osx
---
## Shell 
```bash
#!/usr/bin/env bash

CONFIGURATION="$1"
TARGET_NAME="$2"

P=$(cd `dirname $0`; pwd)
BUILD_DIR="${P}"/build/Products
SIMULATOT_BUILD_DIR="${BUILD_DIR}"/iphonesimulator
IPHONE_BUILD_DIR="${BUILD_DIR}"/iphoneos
UNIVERSAL_BUILD_DIR="${BUILD_DIR}"

# Step 1. Build Device and Simulator versions
xcodebuild -target "${TARGET_NAME}" ONLY_ACTIVE_ARCH=NO -configuration ${CONFIGURATION} -sdk iphoneos BUILD_DIR="${IPHONE_BUILD_DIR}" clean build
xcodebuild -target "${TARGET_NAME}" ONLY_ACTIVE_ARCH=NO -configuration ${CONFIGURATION} -sdk iphonesimulator BUILD_DIR="${SIMULATOT_BUILD_DIR}" clean build

# Step 2. Copy the framework structure to the universal folder
cp -R "${IPHONE_BUILD_DIR}/${TARGET_NAME}.framework" "${UNIVERSAL_BUILD_DIR}/"

# Step 3. Create universal binary file using lipo and place the combined executable in the copied framework directory
lipo -create -output "${UNIVERSAL_BUILD_DIR}/${TARGET_NAME}.framework/${TARGET_NAME}" "${SIMULATOT_BUILD_DIR}/${TARGET_NAME}.framework/${TARGET_NAME}" "${IPHONE_BUILD_DIR}/${TARGET_NAME}.framework/${TARGET_NAME}"
```
