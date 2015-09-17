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
    if (false) {
        echo 'Hello, your IP is ' . Ydin\Client\User::getIp();
        echo '</pre>';
        exit;
    }

$items = [
        'name'      => 'ken',
        'age'       => 18,
        'job'       => 'student',
        'interest'  => ['football', 'baseball', 'movie'],
        'report'    => [
            'math'      => 100,
            'english'   => 90,
            'chemical'  => 20,
        ],
    ];

    $dot = Ydin\ArrayKit\Dot::factory($items);
    
print_R($dot('namexx','aaa')       );
echo "\n";
print_R($dot('interest.0')   );  
echo "\n";
print_R($dot('interest') );
echo "\n";
print_R($dot('report.math'));
echo "\n";


print_R($dot);
echo "\n";



$dotInstance = new Ydin\ArrayKit\DotInstance($items);
echo $dotInstance->get('interest.0');



