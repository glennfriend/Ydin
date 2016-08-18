### Install
    "crossjoin/browscap" 2.x 的版本必須要使用 PHP 5.6 以上 (目前是使用這個版本)
    "crossjoin/browscap" 3.x 的版本必須要使用 PHP 7 以上
    "crossjoin/browscap" 的程式, PHP 必須安裝 pdo_sqlite
    "crossjoin/browscap" 的程式, PHP 必須安裝 sqlite3

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
