<?php
    $num = array(10, 25, 5, 9, 8, 12);
    $max = $num[0];
    for ($i = 1; $i < 6; $i++) {
        if ($num[$i] > $max) {
            $max = $num[$i];
        }
    }
    echo $max;
    echo "\nCode by Oshin Mehta - 2220100273\n";
?>