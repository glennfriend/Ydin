### PHP version & composer
    "crossjoin/browscap" 2.x 的版本必須要使用 PHP 5.6 以上 (目前是使用這個版本)
    "crossjoin/browscap" 3.x 的版本必須要使用 PHP 7 以上

#### PHP Install extension
- [x] [xdebug](http://xdebug.org/)  - (phpbrew ext install xdebug)
- [x] [pdo_sqlite]                  - by composer "crossjoin/browscap"
- [x] [sqlite3]                     - by composer "crossjoin/browscap"

#### Unit Test
```sh
phpunit
phpunit --configuration phpunit.report.xml
```

#### use myself library to composer
```
{
    "require" : {
        "ydin/ydin": "dev-master"
    },
    "repositories": [
        {
            "type": "path",
            "url": "./local/ydin-ydin"
        }
    ],
}
```

#### use github to composer
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
