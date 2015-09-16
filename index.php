<?php

    // composer autoload
    require_once(__DIR__.'/vendor/autoload.php');

    echo 'Hello, your IP is ' . Ydin\Client::getIp();
