---
layout: post
title: problem and solution
subtitle: 
date: 2017-03-04 03-Mar-42
author: Lu-Kye
header-img: img/post-bg.jpg
catelog: true
tags: 
  - ios
---
## Category(extension) in static library doesnt work
```
Solution : add "-ObjC" or "-all_load" to "Build Settings"->"Linking"->"Other Link Flags"
```
