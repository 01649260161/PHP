<?php
$students = array('nguyen van a','nguyen van b','nguyen van c','nguyen van d');
    $i = 0;
    do{
        echo $i . $students[$i] . "<br>";
        $i ++;

    }while (isset($students[$i]));
?>