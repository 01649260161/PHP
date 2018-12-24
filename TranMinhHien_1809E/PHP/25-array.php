<?php
    /*$score = array("John","Marry","Mark","Peter","Sheck","John","Mark","Peter");
    echo "Ban Dau :"."<br>";
    echo "<pre>";
        print_r($score);
    echo "</pre>";


    unset($score[1]);

    echo "Lat Sau :"."<br>";
    echo "<pre>";
    print_r($score);
    echo "</pre>";

    array_push($score,"MinhHien");

    echo "Lat Sau :"."<br>";
    echo "<pre>";
    print_r($score);
    echo "</pre>";

    array_unshift($score,"ThuHa");
    echo "Lat Sau :"."<br>";
    echo "<pre>";
    print_r($score);
    echo "</pre>";

    $new = array_reverse($score);
    echo "Lat Sau :"."<br>";
    echo "<pre>";
    print_r($new);
    echo "</pre>";

    $new1 =array_flip($score);
    echo "Lat Sau :"."<br>";
    echo "<pre>";
    print_r($new1);
    echo "</pre>";*/

    $point = array(5,6,1,2,7,9,5,1,3,9,7,8,5,4);
    $TB = array_sum($point);
    $sum = count($point);
    $max = max($point);
    $min = min($point);

    echo "Diem TB : " . $TB/$sum;
    echo "<br>";
    echo "Diem Max : " . $max;
    echo "<br>";
    echo "Diem Min : " . $min;
    echo "<br>";
    echo "Tong : " . $TB;
    echo "<br>";
    echo "Thanh phan : " . $sum;

    $new = array_count_values($point);
    echo "<pre>";
        print_r($new);
    echo "</pre>";
