---
layout: post
title: decorator
subtitle: 
date: 2017-03-04 04-Mar-17
author: Lu-Kye
header-img: img/post-bg.jpg
catelog: true
tags: 
  - python
---
[LINK](http://thecodeship.com/patterns/guide-to-python-function-decorators/)

## Example
```python
def p_decorate(func):
   def func_wrapper(name):
       return "<p>{0}</p>".format(func(name))
   return func_wrapper

def strong_decorate(func):
    def func_wrapper(name):
        return "<strong>{0}</strong>".format(func(name))
    return func_wrapper

def div_decorate(func):
    def func_wrapper(name):
        return "<div>{0}</div>".format(func(name))
    return func_wrapper

get_text = div_decorate(p_decorate(strong_decorate(get_text)))

@div_decorate
@p_decorate
@strong_decorate
def get_text(name):
   return "lorem ipsum, {0} dolor sit amet".format(name)

print get_text("John")

#Outputs "<div><p><strong>lorem ipsum, John dolor sit amet</strong></p></div>"
```
