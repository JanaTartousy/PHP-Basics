<?php

function isPalindrome($str) {
    $revStr = strrev($str); 
    return $str === $revStr; 
}

$str1 = "racecar";
$str2 = "hello";
echo $str1 . (isPalindrome($str1) ? " is" : " is not") . " a palindrome\n"; 
echo $str2 . (isPalindrome($str2) ? " is" : " is not") . " a palindrome\n"; 
?>
