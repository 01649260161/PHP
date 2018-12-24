<?php
    $students = array('nguyen van a','nguyen van b','nguyen van c','nguyen van d');
    $dem = 0;
do{$dem++;}while(isset($students[$dem]));
for($i = 0;$i < $dem;$i++){
echo $i  . $students[$i] . "<br>";
}

?>