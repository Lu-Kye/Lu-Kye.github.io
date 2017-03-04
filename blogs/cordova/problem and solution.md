## Android load url, Application Error
```xml
Problem: on android, config like: <content src="http://localhost:8080/index.html">, show Application Error, Network Wrong!!!
Solution: Add white-list plugin. config like:
<feature name="Whitelist">
    <param name="android-package" value="org.apache.cordova.whitelist.WhitelistPlugin" />
    <param name="onload" value="true" />
</feature>
```
