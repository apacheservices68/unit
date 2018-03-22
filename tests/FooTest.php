<?php
/**
 * Created by PhpStorm.
 * Author: Vinh Banh <apacheservices68@gmail.com>
 * Date: 21/03/2018
 * Time: 17:58
 */
use PHPUnit\Framework\TestCase;
class FooTest extends TestCase
{
    public function testTrueIsTrue(){
        $foo = true;
        $this->assertTrue($foo);
    }

    public function testPushAndPop(){
        $foo = [];
        $this->assertSame(0, count($foo));
        array_push($foo , 'bar');
        $this->assertSame('bar',$foo[count($foo) - 1]);
        $this->assertSame(1 ,  count($foo));

    }

}
