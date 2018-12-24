<?php
    $Firstname = "Jone";
    $Lastname = "smit";
    $Number = 12.34;
    $Fullname = $Firstname . " " . $Lastname ;

    echo $Firstname;
    echo $Lastname;

    echo "<br>";

    echo $Fullname;
    echo "<br>";
    echo $Number;

    echo "<br>";

    var_dump($Firstname);

echo "<br>";

    echo gettype($Firstname);


    settype($Number,"integer");
    echo "<br>";
    echo $Number;
?>