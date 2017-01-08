<?php
require_once 'vendor/autoload.php';
use App\Session;

class SessionTest extends PHPUnit_Framework_TestCase
{    
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
    
    public function testSetGet()
    {
        $this->assertNull( Session::set('key', 'val'));
        $this->assertEquals( Session::get('key'), 'val');
    }
    
    public function testSetGetObjects()
    {
        $obj = new stdClass();
        $obj->param = 'p~ç@#$%¨&*()';
        $this->assertNull( Session::set('key', $obj));
        $this->assertEquals( Session::get('key'), $obj);
    }
           
}