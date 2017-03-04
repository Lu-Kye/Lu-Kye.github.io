[LINK](https://facebook.github.io/watchman/)

## Introduction
Watchman exists to watch files and record when they change. *It can also trigger actions (such as rebuilding assets) when matching files change.*

## Quickstart
```bash
watchman watch ~/src
watchman -- trigger ~/src buildme '*.css' -- minify-css
```
