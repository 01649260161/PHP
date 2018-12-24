<?php
    $array = array();

    $array[] = "Tran Van A";
    $array[] = "K57";
    $array[] = "CNTT";

    $length = count($array);
    echo $length;

    if($length > 0){
        echo "la mang rong";
    }else{
        echo "mang khong rong";
    }

    if(!empty($array)){
        echo "khong la mang rong";
    }else{
        echo "la mang rong";
    }