<?php

    //
    error_reporting(E_ALL);
    ini_set('html_errors','On');
    ini_set('display_errors','On');
    ini_set('log_errors','On');

    //
    date_default_timezone_set('UTC');
    ini_set('date.timezone', 'UTC');

    // composer autoload
    require_once(__DIR__.'/vendor/autoload.php');

    echo '<pre>';
    if (true) {
        echo 'Hello, your IP is ' . Ydin\Client\User::getIp();
        echo '</pre>';
        exit;
    }


