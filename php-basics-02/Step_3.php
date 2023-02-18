<?php

$var1 = 32;
$var2 = 45;

echo "Before swapping: \n";
echo "var1 = " . $var1 . "\n";
echo "var2 = " . $var2 . "\n";

$temp = $var1;
$var1 = $var2;
$var2 = $temp;

echo "After swapping: \n";
echo "var1 = " . $var1 . "\n";
echo "var2 = " . $var2 . "\n";

?>