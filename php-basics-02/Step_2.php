<?php 
function testNumber($number) {
  if ($number > 30) {
    echo " $number is greater than 30.";
  } elseif ($number > 20) {
    echo " $number is greater than 20.";
  } elseif ($number > 10) {
    echo " $number is greater than 10.";
  } else {
    echo " $number is less than 10.";
  }
}
testNumber(33);
testNumber(28);
testNumber(15);
testNumber(7);
?>