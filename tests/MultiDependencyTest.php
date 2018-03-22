<?php
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
/**
 * Created by PhpStorm.
 * Author: Vinh Banh <apacheservices68@gmail.com> on 22/03/2018
 * Date: 22/03/2018
 * Time: 10:50
 */

class MultipleDependencyTest extends PHPUnit_Framework_TestCase
{

    public function testTestOne()
    {
        $this->assertTrue(true);
        return 'one';
    }

    public function testTestTwo()
    {
        $this->assertTrue(true);
        return 'two';
    }

    public function testTestThree()
    {
        $this->assertTrue(true);
        return 'three';
    }


    /**
     * @depends testTestOne
     * @depends testTestTwo
     * @depends testTestThree
     */
    public function testTestFour($a,  $b ,$c){
        $this->assertSame('one' , $a);
        $this->assertSame('two' , $b);
        $this->assertSame('three' , $c);
    }
}
