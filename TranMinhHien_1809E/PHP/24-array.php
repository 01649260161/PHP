<?php
    $score = ["John","Marry","Mark","Peter","Sheck"];

    $lastvalue = array_pop($score);
    echo $lastvalue;
    echo "<br>";
    $firstvalue = array_shift($score);
    echo $firstvalue;
    echo "<pre>";
    print_r($score);
    echo "</pre>";

    $newarray = array_values($score);
    echo "<pre>";
    print_r($newarray);
    echo "</pre>";

    $newarray1 = array_keys($score);
    echo "<pre>";
    print_r($newarray1);
    echo "</pre>";