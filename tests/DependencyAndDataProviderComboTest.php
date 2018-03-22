<?php
/**
 * Created by PhpStorm.
 * Author: Vinh Banh <apacheservices68@gmail.com> on 22/03/2018
 * Date: 22/03/2018
 * Time: 15:22
 */
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class DependencyAndDataProviderComboTest extends PHPUnit_Framework_TestCase
{

    public function provider(){
        return [
            ['provider1'],
            ['provider2']
        ];
    }

    public function testProductFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProductSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    public function testProductThird()
    {
        $this->assertTrue(true);
        return 'third';
    }

    /**
     * @depends testProductFirst
     * @depends testProductSecond
     * @depends testProductThird
     * @dataProvider provider
     */
    public function testConsumer()
    {
        var_dump(func_get_args());die;
        $this->assertSame(
            ['provider1' ,'first', 'second','third'],
            func_get_args()
        );


    }

}
