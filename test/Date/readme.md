```php
    // 現在 time(), 距離 2000-01-01 是否在 7 天之內
    Ydin\Date\Day::inToday( strtotime('2000-01-01'), 7 );
    // -> false

    date_default_timezone_set('Asia/Taipei');
    ini_set( 'date.timezone', 'Asia/Taipei');

    $timezone = date_default_timezone_get();
    $now = time();
    $timestamp = Ydin\Date\Convert::timezone($now, $timezone, 'UTC');
    echo date("Y-m-d H:i:s", $timestamp);
```