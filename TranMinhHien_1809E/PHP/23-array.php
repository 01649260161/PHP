<?php
    $student = array();
    $student["SV001"] = array("name"=>"John","sex"=>1,"score"=>array(4,5,6));
    $student["SV002"] = array("name"=>"Peter","sex"=>1,"score"=>array(5,6,7));
    $student["SV003"] = array("name"=>"Marry","sex"=>0,"score"=>array(7,8,9));

    $students = array("SV001"=>
        array(
            "name"=>"John",
            "sex"=>1,
            "score"=>
            array(4,5,6)),
        "SV002"=>
            array(
                "name"=>"John",
                "sex"=>1,
                "score"=>
                    array(4,5,6)),
        "SV003"=>
            array(
                "name"=>"John",
                "sex"=>1,
                "score"=>
                    array(4,5,6)),
    );
    foreach ($student as $key => $val){
        $name = $val["name"];
        $sex = $val["sex"];
        $score = $val["score"];
        $total =0;
        for($i=0;$i<count($score);$i++){
            $total +=$score[$i];
        }

        echo $name . " - " . $sex . " - " . $total;
        echo "<br>";
    }
    /*echo "<pre>";
    print_r($students);
    echo "</pre>";*/
