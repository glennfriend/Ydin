<?php

namespace Ydin\ArrayKit;

/**
 * DataConverge
 *
 * @version     1.0.0
 * @category    Ydin
 * @package     Ydin\ArrayKit
 */
class Dot
{

    // 未測試, 未使用
    // 可以改成產生 instance, 直接輸出 $arrayDot('vivian.age', $defaultValue=0 );

    /**
     * 產生 instance
     * 包裝後可以直接以 function 方式使用
     *      - $dot('user.email')
     *      - $dot('user.friend.0.name')
     *
     * @see Ydin\ArrayKit\DotInstance
     * @param  array
     * @return wrap closure object
     */
    static public function factory(Array $items)
    {
        $wrap = function($keyword, $defaultValue=null) use ($items)
        {
            $dot = new DotInstance($items);
            return $dot->get($keyword, $defaultValue);
        };
        return $wrap;
    }

}




