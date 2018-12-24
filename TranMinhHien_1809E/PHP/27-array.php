<?php
/*$score = array("John","Marry","Mark","Peter","Sheck");*/
/*
    print_r($score);
echo "<br>";
    echo "cunrent : " . current($score);
    echo "<br>";
    echo "next : " . next($score);echo "<br>";
    echo "cunrent : " . current($score);echo "<br>";
    echo "next : " . next($score);echo "<br>";
    echo "pre : " . prev($score);echo "<br>";
    echo "end : " . end($score);echo "<br>";
    echo "reset : " . reset($score);*/

    /*$csdl = serialize($score);
    echo $csdl;*/

    /*$val ="a:5:{i:0;s:4:\"John\";i:1;s:5:\"Marry\";i:2;s:4:\"Mark\";i:3;s:5:\"Peter\";i:4;s:5:\"Sheck\";}";
    $score = unserialize($val);
    echo "<pre>";
    print_r($score);
    echo "</pre>";*/

    $score = array(1,2,3,4,5,6,7,8,9);
    shuffle($score);
    echo "<pre>";
    print_r($score);
    echo "</pre>";

    $name = "PHP";
    $time = 100;

    $hello = compact("name","time");
    echo "<pre>";
    print_r($hello);
    echo "</pre>";

    $array = range(1,10,2);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $key = array("name","time","total");
    $val = array("PHP",200,100);
    $newarray = array_combine($key,$val);

    echo "<pre>";
    print_r($newarray);
    echo "</pre>";