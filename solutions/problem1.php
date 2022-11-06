<?php

function getLastWordLength($string) {
    // check is the string in english or not
    if (strlen($string) != mb_strlen($string)) {
        return "Invalid Input!";
    }
    // check if string length is greater than 104
    if (strlen($string) > 104) {
        return "Invalid Input!";
    }
    // remove extra spaces from string
    $string = trim($string);
    // check if string is valid
    if (strlen($string) <= 0) {
        return "Invalid Input!";
    }

    //get all words as a array from this string
    $words = explode(" ", $string);

    //get the last word from the array
    $last_word = end($words);

    //return string length of last word of the string
    return strlen($last_word);
}

/*if (isset($_GET['string'])) {
    echo getLastWordLength($_GET['string']);
}*/

/**
 *
Problem 1:
Given a string s consisting of words and spaces, return the length of the last word in the string.
A word is a maximal substring consisting of non-space characters only.

Example 1:
Input: s = "Hello World"
Output: 5
Explanation: The last word is "World" with length 5.
Example 2:
Input: s = " fly me to the moon "
Output: 4
Explanation: The last word is "moon" with length 4.
Example 3:
Input: s = "luffy is still joyboy"
Output: 6
Explanation: The last word is "joyboy" with length 6.

Constraints:
1 <= s.length <= 104
s consists of only English letters and spaces ' '.
There will be at least one word in s.
 *
 * */