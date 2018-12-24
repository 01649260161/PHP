<?php
class ConNguoi
{
    private $name = "Vũ Thanh Tài";
    private $age = 20;
    public static function __set_state(array $arr)
    {
        foreach ($arr as $key => $value) {
            echo $key . '->' . $value . '<br/>';
        }
    }
}
$connguoi = new ConNguoi();
eval(var_export($connguoi, true) . ';');