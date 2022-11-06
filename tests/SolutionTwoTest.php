<?php
use PHPUnit\Framework\TestCase;

class SolutionTwoTest extends TestCase {

    public function testReturnRomanNumber()
    {
        require 'solutions/problem2.php';
        $this->assertEquals('III', getRomanNumber(3));
        $this->assertEquals('LVIII', getRomanNumber(58));
        $this->assertEquals('MCMXCIV', getRomanNumber(1994));
    }
}
