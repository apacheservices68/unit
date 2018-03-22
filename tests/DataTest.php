<?php
require_once ("/var/www/html/test/src/CsvFileIterator.php");
/**
 * Created by PhpStorm.
 * Author: Vinh Banh <apacheservices68@gmail.com> on 22/03/2018
 * Date: 22/03/2018
 * Time: 11:01
 */
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class DataTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider additionalProvider1
     */
    public function testAdd($expected , $a , $b){
        $this->assertSame($expected , $a + $b);
    }

    public function additionalProvider(){
        return [
            'adding zeros' => [0,0,0],
            'zero plus one' => [1,1,1],
            'one plus zero' => [1,0,1],
            'one plus one' => [2,1,3]
        ];
    }

    public function additionalProvider1(){
        return new CsvFileIterator('/var/www/html/phpunit-examples/data/data.csv');
    }
}
