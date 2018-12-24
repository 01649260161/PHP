<?php
    $array1 = array("a","b","c");
    $array2 = array(1,2,3);
    $array3 = array("PHP"=>"php","PHYTHON"=>"phython");
    $new = array_merge($array1,$array2,$array3);

    echo "<pre>";
        print_r($new);
    echo "</pre>";

    $new1 = array_rand($new,2);
    print_r($new1);



    echo "<br>Search :<br>";
    echo $key = array_search("php",$new);

    if(array_key_exists("1",$new)){
        echo "Exits";
    }
