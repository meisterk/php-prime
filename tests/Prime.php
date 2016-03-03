<?php

require '../src/Prime.php';

class PrimeTest extends PHPUnit_Framework_TestCase {

    protected $object;

    protected function setUp() {
        $this->object = new Prime;
    }

    protected function tearDown() {
        
    }

   public function testGetPrimes() {
        $this->assertEquals(
                array(2, 3, 5, 7)
                , $this->object->getPrimes(10)
        );
    
        $this->assertEquals(
                array(2, 3, 5, 7, 11, 13, 17, 19)
                , $this->object->getPrimes(20)
        );
    }

}

