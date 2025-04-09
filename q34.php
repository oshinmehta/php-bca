<?php
$x = array("a" => "red", "b" => "green", "c" => "blue");
$y = array("u" => "yellow", "v" => "orange", "w" => "pink");
$z = array_merge($x, $y); 
var_dump($z);
echo "<br>";

var_dump($x == $y);   
echo "<br>";

var_dump($x === $y);  
echo "<br>";

var_dump($x != $y);   
echo "<br>";

var_dump($x !== $y);  
echo "<br>";

echo "\nCode by Oshin Mehta - 2220100273\n";
?>
