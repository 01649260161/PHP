<?php
$students = array('nguyen van a','nguyen van b','nguyen van c','nguyen van d');
$i = 0;
while (isset($students[$i])){
        echo $i . $students[$i] . "<br>";
        $i++;
}