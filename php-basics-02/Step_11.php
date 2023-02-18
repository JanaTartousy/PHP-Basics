<?php

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    } return true;
}

$num1 = 7;
$num2 = 12;
echo $num1 . (isPrime($num1) ? " is" : " is not") . " a prime number\n"; 
echo $num2 . (isPrime($num2) ? " is" : " is not") . " a prime number\n"; 
?>
