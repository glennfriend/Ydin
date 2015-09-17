<?php

// 未進行 正確標準 測試
exit;

/**
 *  容量
 *
 *  @category    Ydin
 *  @package     Ydin\Number\Capacity
 *  @uses
 */
namespace Ydin\Number;

class Capacity
{

    /**
     *  計算容量
     *  Calculate the human-readable file size (with proper units)
     */
    public static function convertSize($bytes)
    {
        $s = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
        $e = floor(log($bytes)/log(1024));
        return sprintf('%.2f '.$s[$e], ($bytes/pow(1024, floor($e))));
    }

    

}
