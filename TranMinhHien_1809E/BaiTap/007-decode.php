<?php
    $string_json = '[{"ten_tp":"ha noi","quan":[{"ten_quan":"thanh xuan","phuong":[{"ten_phuong":"1"},{"ten_phuong":"1"},{"ten_phuong":"1"}]},{"ten_quan":"tay ho","phuong":[]},{"ten_quan":"hoan kiem","phuong":[]}]},{"ten_tp":"ho chi minh","quan":[]},{"ten_tp":"da nang","quan":[]},{"ten_tp":"hai phong","quan":[]}]';

    $city = json_decode($string_json);
    echo "<br> json";
    echo "<pre>";
        print_r($string_json);
    echo "</pre>";

    echo "<br> array";
    echo "<pre>";
        print_r($city);
    echo "</pre>";