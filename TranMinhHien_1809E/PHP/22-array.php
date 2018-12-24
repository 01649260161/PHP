<?php
    $array = array();

    $array['ten'] = "Tran Van A";
    $array['khoa'] = "K57";
    $array['lop'] = "CNTT";
    $array[] = "Item 1";
    $array[] = "Item 1";

    foreach ($array as $key => $val){
        echo $key . " : " . $val ;
        echo "<br>";
}