```php
$email = 'ken@hotmail';
echo Ydin\Url\Convert::mailto($email)

    <a href="mailto:ken@hotmail">ken@hotmail</a>


$url = 'https://google.com.tw';
echo Ydin\Url\Convert::link($url);
        
    <a href="https://google.com.tw" target="_blank">https://google.com.tw</a>
```