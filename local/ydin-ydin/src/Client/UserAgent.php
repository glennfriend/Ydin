<?php

namespace Ydin\Client;

/**
 *  Client UserAgent information
 *
 *  @version    1.1.0
 *  @category   Ydin
 *  @package    Ydin\Client\UserAgent
 *  @composer   https://packagist.org/packages/crossjoin/browscap
 *  @uses
 */
class UserAgent
{

    private static $browscap;

    /**
     *  get browser info
     *  @return array
     */
    public static function get()
    {
        if ( !self::$browscap ) {
            self::$browscap = new \Crossjoin\Browscap\Browscap();
        }
        return (array) self::$browscap->getBrowser()->getData();
    }

    /**
     *  get browser info by User Agent
     *  @return array
     */
    public static function getByAgent($userAgent)
    {
        if ( !self::$browscap ) {
            self::$browscap = new \Crossjoin\Browscap\Browscap();
        }
        return (array) self::$browscap->getBrowser($userAgent)->getData();
    }

}

