<?php

class ProofTest extends PHPUnit_Framework_TestCase {

    public function testCans()
    {
        $this->assertInstanceOf('Bowling\Proof', new Bowling\Proof());
    }
}
