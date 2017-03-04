## Replace
```
replace all :%s/xxxx/xxxx1/g
replace from current line to last :.,$s/xxxx/xxxx1/g
replace from line to line :{$line_start},{$line_end}s/xxxx/xxxx1/g
replace from current line to line :.,{$line_end}s/xxxx/xxxx1/g
```

## Find text(foo) in files(.js) - with NERDTree
```
:vim foo **/*.js | copen
```
