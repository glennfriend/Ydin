**Install**
- [x] [xdebug](http://xdebug.org/) - (phpbrew ext install xdebug)

**Unit Test**
```sh
phpunit
phpunit --configuration phpunit.report.xml
```

**for Composer**
```
{
    "require" : {
        "ydin/ydin": "dev-master"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/glennfriend/Ydin.git"
        }
    ],
}
```
