<?php
use PHPUnit\Framework\TestCase;

class SolutionOneTest extends TestCase {

    public function testReturnLastWordLength()
    {
        require 'solutions/problem1.php';
        $this->assertEquals(6, getLastWordLength('My Name is Tonmoy'));
        $this->assertEquals(11, getLastWordLength('My Name is AbuBinOalid'));
        $this->assertEquals(5, getLastWordLength('Hello World'));
        $this->assertEquals(4, getLastWordLength('  fly me to the moon  '));
        $this->assertEquals(6, getLastWordLength('luffy is still joyboy'));
    }
}