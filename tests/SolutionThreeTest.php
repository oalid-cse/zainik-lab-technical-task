<?php
use PHPUnit\Framework\TestCase;

class SolutionThreeTest extends TestCase {

    public function testPossibilitySameLocation()
    {
        require 'solutions/problem3.php';


        $this->assertEquals('YES', isPossibleToSameLocation("0 2 5 1"));
        /*
         * This ans is yes.
         * Explanation : kangaroo1 start from 0 and jump distance 2
         * kangaroo2 start from 5 and jump distance 1
         *
         * after first jump
         *      kangaroo1-location: 4
         *      kangaroo2-location: 6
         *
         * after second jump
         *      kangaroo1-location: 6
         *      kangaroo2-location: 7
         *
         * after third jump
         *      kangaroo1-location: 8
         *      kangaroo2-location: 8
         * */

        $this->assertEquals('YES', isPossibleToSameLocation("0 3 4 2"));
        /*
         * This ans is yes.
         * Explanation : kangaroo1 start from 0 and jump distance 3
         * kangaroo2 start from 4 and jump distance 2
         *
         * after first jump
         *      kangaroo1-location: 6
         *      kangaroo2-location: 6
         *
         * */


        $this->assertEquals('NO', isPossibleToSameLocation("2 1 1 2"));
        /*
         * This ans is NO.
         * Explanation : In Problem 3 Constraints
         *      0 <= x1 < x2 <= 10000
         * Here x1 = 2 & x2 = 1;
         * where x1 is less than x2; and it's violating the constraints;
         *
         *
         * */
    }
}