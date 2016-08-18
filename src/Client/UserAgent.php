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

    /**
     *  get browser info
     *  @return array
     */
    public static function get()
    {
        return (array) self::getBrowscap()->getBrowser();
    }

    /**
     *  get browser info by User Agent
     *  @return array
     */
    public static function getByAgent($userAgent)
    {
        return (array) self::getBrowscap()->getBrowser($userAgent);
    }

    // --------------------------------------------------------------------------------
    // private
    // --------------------------------------------------------------------------------

    /**
     *
     */
    private static function getBrowscap()
    {
        static $browscap;
        if (!$browscap) {
            $browscap = new \Crossjoin\Browscap\Browscap();
            //$browscap->setAutoUpdateProbability(1);
            //$arrayFormatter = new \Crossjoin\Browscap\Formatter\PhpGetBrowser(true);
            //$browscap->setFormatter($arrayFormatter);
        }

        return $browscap;
    }

}

