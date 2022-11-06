<?php


function isPossibleToSameLocation($input) {

    //get the inputs
    $array_of_input = explode(' ', $input);
    if (!isset($array_of_input[3])) {
        return "NO"; //"Invalid Input";
    }
    $x1 = intval($array_of_input[0]);
    $v1 = intval($array_of_input[1]);
    $x2 = intval($array_of_input[2]);
    $v2 = intval($array_of_input[3]);

    // check input validations
    if (($x1 < 0) || ($x2 < $x1) || ($x2 > 10000) || ($v1 < 1) || ($v1 > 10000) || ($v2 < 1) || ($v2 > 10000)) {
        return "NO"; //"Invalid Position";
    }

    if ($v1 <= $v2) {
        return "NO";
    }
    $is_possible = "NO";
    do {
        $x1 += $v1;
        $x2 += $v2;
        if ($x1 == $x2) {
            $is_possible = "YES";
            break;
        }
    } while ($x1 < $x2);
    return $is_possible;
}

//echo isPossibleToSameLocation("0 8 5 10000");


/**
 *
Problem 3:
You are choreographing a circus show with various animals. For one act, you are given two
kangaroos on a number line ready to jump in the positive direction (i.e, toward positive infinity).
● The first kangaroo starts at location x1 and moves at a rate of v1 meters per jump.
● The second kangaroo starts at location x2 and moves at a rate of v2 meters per jump.
You have to figure out a way to get both kangaroos at the same location at the same time as part of
the show. If it is possible, return YES, otherwise return NO.
Example
X1 = 2
V1 = 1
X2 = 1
V2 = 2
After one jump, they are both at x=3 , (x1+v1=2,x2+v2=1+2 ), so the answer is YES.

Function Description
Complete the function kangaroo in the editor below.
kangaroo has the following parameter(s):
● int x1, int v1: starting position and jump distance for kangaroo 1
● int x2, int v2: starting position and jump distance for kangaroo 2
Returns YES or NO
Input Format
A single line of four space-separated integers denoting the respective values of x1 , v1 , x2 , and v2.

Constraints

0 <= x1 < x2 <= 10000
1 <= v1 <= 10000
1 <= v2 <= 10000
Sample Input 0: 0 3 4 2

Sample Output 0: YES
Explanation :
The two kangaroos jump through the following sequence of locations:

From the image, it is clear that the kangaroos meet at the same location (number 12 on the number
line) after the same number of jumps (4 jumps), and we print YES.
Sample Input 1: 0 2 5 3
Sample Output 1: NO
Explanation 1:
The second kangaroo has a starting location that is ahead (further to the right) of the first kangaroo's
starting location (i.e.,x2>x1 ). Because the second kangaroo moves at a faster rate (meaning v2>
v1 ) and is already ahead of the first kangaroo, the first kangaroo will never be able to catch up.
Thus, we print NO.
 *
 * */
