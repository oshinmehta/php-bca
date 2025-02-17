<?php
    $a = 36;
    $b = 60;
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    echo "HCF is " . $a;
    echo "\nCode by Oshin Mehta - 2220100273\n";
?>