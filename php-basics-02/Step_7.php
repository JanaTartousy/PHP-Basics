<?php

function replacePython($input) {
    $output = str_replace("Python", "PHP", $input);
    $output = str_replace("PHP", " PHP", $output);
    return $output;
}

$input = "I love Python programming. Python is my favorite language.";
echo replacePython($input); 
?>
