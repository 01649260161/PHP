<?php
$students = array();
$students[0] = 'A';
$students[1] = 'B';
$students[2] = 'C';
$students[3] = 'D';
$students[4] = 'E';
$students['abc'] = 'F';
$students['def'] = 'G';

foreach ($students as $key => $value){
    echo $key ." ". $value . "<br>";}

unset($students[2]);
echo "<br>-------------------------------------------------<br>";
foreach ($students as $key => $value){
    echo $key ." ". $value . "<br>";}