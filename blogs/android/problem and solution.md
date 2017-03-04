## library sdk version higher than mine
```
Problem: library(like facebook) minVersion higher than mine app minVersion, gradle report error
Solution: add "<uses-sdk tools:overrideLibrary="org.apache.cordova, com.facebook" />" into AndroidManifest.xml
```
