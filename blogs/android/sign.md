## unsign a signed apk
```bash
zip -d yourapp.apk "META-INF*"
```

## sign apk
```bash
#1.Generate a private key using keytool
keytool -genkey -v -keystore my-release-key.keystore -alias alias_name -keyalg RSA -keysize 2048 -validity 10000
#2
jarsigner -verbose -sigalg SHA1withRSA -digestalg SHA1 -keystore my-release-key.keystore my_application.apk alias_name
#3
jarsigner -verify -verbose -certs my_application.apk
#4
zipalign -v 4 your_project_name-unaligned.apk your_project_name.apk
```
