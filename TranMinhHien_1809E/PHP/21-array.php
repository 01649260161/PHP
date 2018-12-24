<?php
//C1
    $array = array();

    $array[] = "Tran Van A";
    $array[] = "K57";
    $array[] = "CNTT";
//C2
    $array = array();

    $array[0] = "Tran Van A";
    $array[1] = "K57";
    $array[2] = "CNTT";
//C3
        $array = array("Tran Van A","K57","CNTT");


        echo $array[1];
        if(!empty($array)){
        for($i =0;$i<count($array);$i++){
            echo $array[$i];
            echo "<br>";
        }}