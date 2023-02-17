<?php
function calculateArea($height, $width) {
  $area = $height * $width;
  echo "Area is " . $area;
}

// Calling the function with $height = 5 and $width = 5
calculateArea(5, 5);

// Calling the function with $height = 5 and $width = 3
calculateArea(5, 3);
?>