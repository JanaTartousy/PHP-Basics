<?php

function isPowerOfTwo($num) {
    if ($num <= 0) {
        return false;
    }
    while ($num > 1) {
        if ($num % 2 != 0) {
            return false;
        }
        $num /= 2;
    }
    return true;
}

$num1 = 4;
$num2 = 9;
echo $num1 . (isPowerOfTwo($num1) ? " is" : " is not") . " power of 2\n";
echo $num2 . (isPowerOfTwo($num2) ? " is" : " is not") . " power of 2\n"; 
?>
