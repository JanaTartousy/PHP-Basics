<?php
$name = "Gaby";
$position = "tech consultant";
$github_url = "https://github.com/gk-git";

//  1: Using double quotes and .
echo "Hello, I'm $name, I'm a $position. Please check my github link $github_url.\n";

//  2: Using double quotes and without .
echo "Hello, I'm {$name}, I'm a {$position}. Please check my github link {$github_url}.\n";

//  3: Without using double quotes.
echo 'Hello, I\'m '.$name.', I\'m a '.$position.'. Please check my github link '.$github_url.".\n";

//  4: Without using double quotes or .
echo 'Hello, I\'m ', $name, ', I\'m a ', $position, '. Please check my github link ', $github_url, ".\n";
?>