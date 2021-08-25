<?php
namespace Test\Library;

use PHPUnit\Framework\TestCase;
use Library\Guest;

class GuestTest extends TestCase
{
    public function testHello()
    {
        $guest = new Guest('monilom', ['y' => '1992', 'm' => '8', 'd' => '21']);

        $result = $guest->calcAge();

        $this->assertEquals(29, $result);
    }
}