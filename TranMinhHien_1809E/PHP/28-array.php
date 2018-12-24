<?php
    $array1 =array("PHP"=>"php","name"=>"say");
    $array2 =array("php");

    $new =array_diff($array1,$array2);
    $new1 =array_diff($array2,$array1);
    echo "<pre>";
    print_r($new);
    echo "</pre>";
    echo "<pre>";
    print_r($new1);
    echo "</pre>";

    $new2 = array_intersect($array1,$array2);
    echo "<pre>";
    print_r($new2);
    echo "</pre>";
    $new3 = array_intersect_assoc($array1,$array2);


    echo "<pre>";
    print_r($new3);
    echo "</pre>";

    $new4 = array_intersect_key($array1,$array2);
    echo "<pre>";
    print_r($new4);
    echo "</pre>";