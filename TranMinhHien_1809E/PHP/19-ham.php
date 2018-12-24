<?php
    //18 = 1 + 8 = 9
    //234 = 2 + 3 + 4 = 9
    function sum($number){
        $sum = 0;
        while ($number > 0){
            $digit = $number / 10;
            $digit1 = $number % 10;
            $sum += $digit1;
            $number = $digit;
        }
        return $sum;
    }
    require "01.php";
?>