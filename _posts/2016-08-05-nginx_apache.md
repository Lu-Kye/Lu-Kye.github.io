---
layout: post
title: nginx_apache
subtitle: 
date: 2017-03-04 10-Mar-44
author: Lu-Kye
header-img: img/post-bg.jpg
catelog: true
tags: 
  - server
---
## Nginx VS Apache
[LINK](http://zyan.cc/nginx_php_v6/)

为什么Nginx的性能要比Apache高得多？这得益于Nginx使用了最新的epoll（Linux 2.6内核）和kqueue（freebsd）网络I/O模型，而Apache则使用的是传统的select模型。目前Linux下能够承受高并发访问的Squid、Memcached都采用的是epoll网络I/O模型。

处理大量的连接的读写，Apache所采用的select网络I/O模型非常低效。下面用一个比喻来解析Apache采用的select模型和Nginx采用的epoll模型进行之间的区别：

假设你在大学读书，住的宿舍楼有很多间房间，你的朋友要来找你。select版宿管大妈就会带着你的朋友挨个房间去找，直到找到你为止。而epoll版宿管大妈会先记下每位同学的房间号，你的朋友来时，只需告诉你的朋友你住在哪个房间即可，不用亲自带着你的朋友满大楼找人。如果来了10000个人，都要找自己住这栋楼的同学时，select版和epoll版宿管大妈，谁的效率更高，不言自明。同理，在高并发服务器中，轮询I/O是最耗时间的操作之一，select和epoll的性能谁的性能更高，同样十分明了。
