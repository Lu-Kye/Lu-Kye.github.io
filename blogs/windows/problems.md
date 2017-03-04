## Problem of building c++ by `make`    
[LINK](http://stackoverflow.com/questions/38436542/mingw-cxxtest-bizarre-errors)    

Error:   
```
In file included from c:\mingw\include\wchar.h:208:0,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\cwchar:44,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\bits\postypes.h:40,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\iosfwd:40,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\ios:38,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\istream:38,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\sstream:38,
                 from c:\mingw\lib\gcc\mingw32\4.9.3\include\c++\complex:45,
                 from ../lib/cxxtest-4.3/cxxtest/StdHeaders.h:24,
                 from ../lib/cxxtest-4.3/cxxtest/StdValueTraits.h:22,
                 from ../lib/cxxtest-4.3/cxxtest/ValueTraits.h:400,
                 from ../lib/cxxtest-4.3/cxxtest/TestSuite.h:24,
                 from ../lib/cxxtest-4.3/cxxtest/RealDescriptions.h:20,
                 from ../lib/cxxtest-4.3/cxxtest/TestRunner.h:22,
                 from runner.cpp:11:
c:\mingw\include\sys/stat.h:173:14: error: '_dev_t' does not name a type
 struct _stat __struct_stat_defined( _off_t, time_t );
              ^
c:\mingw\include\sys/stat.h:173:14: error: '_ino_t' does not name a type
 struct _stat __struct_stat_defined( _off_t, time_t );

 ...
```

Solution:   
-std=gnu++11 instead of -std=c++11   