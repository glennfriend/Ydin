
取得 使用者 IP
```php
Ydin\Client\User::getIp();
```

取得使用者 UserAgent, 並且解析
```php
Ydin\Client\UserAgent::get()
```

解析 UserAgent
```php
$userAgent = 'Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405'
Ydin\Client\UserAgent::getByAgent($userAgent);
```

