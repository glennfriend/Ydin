<?php

use PHPUnit\Framework\TestCase;

final class Client_UserTest extends TestCase
{
    /**
     *  在 CLI 模式下, 無法取得 IP
     */
    public function test_getIp()
    {
        $ip = Ydin\Client\User::getIp();
        $this->assertEquals(true, null === $ip);
    }

}
