<?php

class UserAgentTest extends PHPUnit_Framework_TestCase
{
    /**
     *  
     */
    public function test_get()
    {
        $info = Ydin\Client\UserAgent::get();
        $this->assertEquals( true,          is_array($info)                 );
        $this->assertEquals( true,          isset($info['parent'])          );
        $this->assertEquals( true,          isset($info['platform'])        );
        $this->assertEquals( true,          isset($info['ismobiledevice'])  );
        $this->assertEquals( true,          isset($info['device_type'])     );
        $this->assertEquals( true,          isset($info['browser_maker'])   );
    }

    /**
     *
     */
    public function test_getByAgent()
    {
        $info = Ydin\Client\UserAgent::getByAgent('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36');
        $this->assertEquals( 'Chrome 45.0', $info['parent']         );
        $this->assertEquals( 'Win7',        $info['platform']       );
        $this->assertEquals( "true",        $info['win64']          );
        $this->assertEquals( "false",       $info['ismobiledevice'] );
    }

}
