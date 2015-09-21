<?php

// 未實作
exit;

/**
 *  Array index
 *
 *  @category    Ydin
 *  @package     Ydin\ArrayKit\Index
 *  @uses
 */
namespace Ydin\ArrayKit;

/*
    代入一個 已經處理好資訊的 二維陣列 index => key, values
    來搜尋、比對裡面的內容

    一維為 index
    二維為 hash values

    example
        Array(
            [0] => Array(
                [name] => Chris
                [age] => 45
            [1] => Array(
                [name] => vivian
                [age] => 18
            [2] => Array(
                [name] => hello kitty
                [age] => 18
            [3] => Array(
                [name] => kevin
                [age]  => 15
        )

    $idx = new Ydin_Array_Index($arr);

    // 第一個匹配的值
    list($key, $value) = $idx->get('name == kevin');

    // 進階匹配
    // parse -> 第二個空白之後皆視為 value 處理
    $idx->get('name % via');            // true ( find "kevin" ) <-- 糢糊匹配
    $idx->get('age >= 30');
    $idx->get('age < 10');
    $idx->get('name === kevin');
    $idx->get('name == kevin', '/i');   // 不論大小寫的匹配

    // 取得 完全匹配多筆
    $idx->find('age == 18', null, $callback);

    // 取得 糢糊匹配多筆
    $idx->find('name % k' , function() {
        echo $key.' '.$value,
    });

    // 相關方法
    $idx->getByIndex(3);        // [name=>kevin, age=15]  -> 真有需要該功能??

    // php 5.4 可使用
    $idx->get(3)[1]['age']      // 15

*/
class Index
{
    /**
     *
     */
    public function factory(Array $data)
    {
        return new IndexInstance($data);
    }

}



class IndexInstance
{
    var $data = null;

    /**
     *
     */
    public function __construct(Array $data)
    {
        $this->data = $data;
    }

}

/*


    以下為舊式寫法



    代入一個 index => key, values 的二維陣列
    來搜尋、比對裡面的內容

    example
        Array(
            [0] => Array(
                [name] => kevin
                [age]  => 15
            [1] => Array(
                [name] => vivian
                [age] => 18
            [2] => Array(
                [name] => old man
                [age] => 85
            [3] => Array(
                [name] => Chris
                [age] => 45
        )

    $index = new Ydin_Array_Index($arr);

    // 取得第一個匹配的 index 值
    $index->get('name','kevin');            // 0
    $index->findIndex('name','kevin');      // [0]

    // 取得 index=3 的 'name' 欄位值
    $index->getValue(3, 'name');            // Chris
    $index->findValue(3,'name');            // ['Chris']

*/