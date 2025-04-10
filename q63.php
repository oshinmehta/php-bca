<?php
// Original string
$text = "Learning PHP is fun and interesting.";

// Find position of the word "PHP"
$position = strpos($text, "PHP");

// Check if the word was found
if ($position !== false) {
    echo "The word 'PHP' was found at position: $position";
} else {
    echo "The word 'PHP' was not found in the string.";
}

echo "\nCode by Oshin Mehta - 2220100273\n";
?>
