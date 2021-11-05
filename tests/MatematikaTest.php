<?php

use PHPUnit\Framework\TestCase;

require_once "./Matematika.php";
class MatematikaTest extends TestCase
{
    public function testPlus()
    {
        $hasil = Matematika::plus(12, 45);
        $this->assertEquals(57, $hasil);
    }

    public function testMin()
    {
        $hasil = Matematika::min(20, 12);
        $this->assertEquals(4, $hasil);
    }

    public function testMul()
    {
        $hasil = Matematika::mul(5, 11);
        $this->assertEquals(55, $hasil);
    }

    public function testDiv()
    {
        $hasil = Matematika::div(16, 4);
        $this->assertEquals(4, $hasil);
    }

    public function testQuad()
    {
        $hasil = Matematika::quad(5);
        $this->assertEquals(24, $hasil);
    }
}
