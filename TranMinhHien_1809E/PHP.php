<?php
    $chieucao = $_POST["ChieuCao"];
    $cannang = $_POST["CanNang"];

    $BMI = $cannang/($chieucao * $chieucao);

    echo $BMI;
    echo "<br>";


    if ($BMI <18.5){echo "Gầy - Thấp";}
    if (18.5<$BMI and $BMI <24.9){echo "Bình Thường - Trung Bình";}
    if (25<$BMI and $BMI <29.9){echo "Hơi Béo - Cao";}
    if (30<$BMI and $BMI <34.9){echo "Béo phì cấp độ 1 - Cao";}
    if (35<$BMI and $BMI <39.9){echo "Béo phì cấp độ 2 - Rất Cao";}

    if ($BMI >40)echo "Béo phì cấp độ 3 - Nguy Hiểm";
?>