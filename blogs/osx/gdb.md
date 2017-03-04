## Download & install
```bash
brew install gdb
```

## Config

### 1.Create certificate
```
1. Open Keychain Access
2. In the menu up top go to Keychain Access -> Certificate Assistant -> Create a Certificate
3. In the name just put gdb-cert, identity as self-signed root, and certificate type as Code Signing
4. Keep clicking continue (like 6-7 clicks) until you get to "Specify a Location for the Certificate." Then Make sure it is on the System keychain!
5. Go to your System keychain, right click on your gdb-cert and click Get Info. In the window that pops up there should be a menu called Trust. Just set it to always trust.
```

### 2.Sign gdb
```
sudo codesign -s gdb-cert [your-gdb-location] (example : `which gdb`)
```

### 3.Restart your mac 

## Use
```bash
1. Go to your output file(like: hello.o, which is built by g++/gcc) path
2. gdb hello.o 
3. break main (or b 20)
4. run
5. quit
```
