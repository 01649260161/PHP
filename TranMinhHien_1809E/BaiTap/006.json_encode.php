<?php
    $city =array();
    $city[]='Ha Noi';
    $city[]='TP HCM';
    $city[]='Da Nang';

    echo "<pre>";
    print_r($city);
    echo "</pre>";

    $city_json = json_encode($city);

    echo "<br>".$city_json;

    $mutil =array(
        array('ten_tp'=>'ha noi','quan'=>array(
            array('ten_quan'=>'thanh xuan','phuong'=>array(
                array('ten_phuong'=>'1'),
                array('ten_phuong'=>'1'),
                array('ten_phuong'=>'1'),
            )),
            array('ten_quan'=>'tay ho','phuong'=>array(

            )),
            array('ten_quan'=>'hoan kiem','phuong'=>array(

            )),
        )),
        array('ten_tp'=>'ho chi minh','quan'=>array()),
        array('ten_tp'=>'da nang','quan'=>array()),
        array('ten_tp'=>'hai phong','quan'=>array()),
    );

    echo '<pre>';
    print_r($mutil);
    echo '</pre>';
    $city_json = json_encode($mutil);
    echo '<br>' . $city_json;